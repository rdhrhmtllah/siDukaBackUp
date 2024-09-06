<?php

use App\Models\Post;
use App\Mail\SendEmail;
use App\Models\laporan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\loginController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\registerController;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

Route::get('/', function () {
    $posts = Post::latest()->take(4)->get();
    return view('home', ['posts' => $posts]);
});

Route::get('/dashboard', function () {
    $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
    $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
    $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
    return view('dashboard', ['hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
})->middleware('admin');

Route::get('/home/formLaporan', function () {
    return view('formLaporan');
});


Route::get('/moreberita', function () {
    $posts = Post::latest()->simplePaginate(10)->withQueryString();
    return view('banyak_berita', ['posts' => $posts]);
});

Route::get('/moreberita/{post:slug}', function (Post $post) {
    return view('isi_berita', ['post' => $post, 'posts' => Post::all()->take(4)]);
});

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout', [loginController::class, 'logout']);
Route::post('/login', [loginController::class, 'auth']);
Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
Route::get('/verify', function () {
    return view('verify');
});
Route::post('/verify/{user:email}', [registerController::class, 'verify']);

Route::get('/resetPass', function () {
    return view('lupaPassEmail');
});

Route::post('/resetPass/sendRecover', [loginController::class, 'resetPass'])->middleware('guest')->name('password.email');;
// Route::post('/resetPass/{user:email}', [loginController::class,'updatePass'])->middleware('guest')->name('password.reset');
Route::get('/reset-password/{token}', function (string $token) {
    return view('formResetPass', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'password' => 'required|min:5|max:255|required_with:confirm-password',
        'confirm-password' => 'required|min:5|same:password',
    ]);
 
    $status = Password::reset(
        $request->only( 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::post('/darurat', [LocController::class, 'index'])->middleware('auth');
Route::post('/laporkan', [laporanController::class, 'store']);

Route::get('/adminNormal', [laporanController::class, 'index'])->middleware('admin');
Route::post('/adminNormal/{laporan:id}/update', [laporanController::class, 'update']);
Route::post('/adminNormal/{laporan:id}', [laporanController::class, 'destroy']);

Route::get('/adminDarurat', [laporanController::class, 'daruratTable'])->middleware('admin');
Route::post('/adminDarurat/{laporan:id}/update', [laporanController::class, 'update']);
Route::post('/adminDarurat/{laporan:id}', [laporanController::class, 'destroy']);

Route::get('/adminSelesai', [laporanController::class, 'show'])->middleware('admin');
Route::post('/adminSelesai/{laporan:id}/update', [laporanController::class, 'update']);
Route::post('/adminSelesai/{laporan:id}', [laporanController::class, 'destroy']);

Route::get('/akunTerverifikasi', [penggunaController::class, 'index'])->middleware('admin');
Route::post('/addAdmin', [penggunaController::class, 'store'])->middleware('admin');
Route::post('/akunTerverifikasi/{user:id}/edit', [penggunaController::class, 'edit'])->middleware('admin');
Route::post('/akunTerverifikasi/{user:id}', [penggunaController::class, 'destroy'])->middleware('admin');

Route::get('/akunTerverifikasiUser', [penggunaController::class, 'indexUser'])->middleware('admin');
Route::post('/akunTerverifikasiUser/{user:id}/edit', [penggunaController::class, 'edit'])->middleware('admin');
Route::post('/akunTerverifikasiUser/{user:id}', [penggunaController::class, 'destroy'])->middleware('admin');
