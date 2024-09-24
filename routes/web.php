<?php

use App\Http\Controllers\kotakSaranController;
use App\Models\Post;
use App\Mail\SendEmail;
use App\Models\laporan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\loginController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\manageBeritaController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\registerController;
use App\Models\User;
use Illuminate\Http\Request;


Route::get('/', function () {
    $posts = Post::latest()->take(4)->get();
    return view('home', ['posts' => $posts]);
})->name('home');

Route::get('/dashboard', [penggunaController::class, 'dashboard'] )->middleware('admin')->middleware('auth')->name('dashboard');
// Route::post('/dashboard/{year:year}', [penggunaController::class, 'dashboardYear'] )->middleware('admin')->middleware('auth');

Route::get('/formLaporan', function () {
    return view('formLaporan');
})->middleware('auth')->name('formLaporan');

Route::get('/userProfile', function () {
    return view('userProfile');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/moreberita', function () {
    $posts = Post::latest()->simplePaginate(8)->withQueryString();
    return view('banyak_berita', ['posts' => $posts]);
})->name('moreBerita');

Route::get('/moreberita/searchMoreBerita', function (Request $request) {
    $search = $request->search;
    $posts =  Post::latest()->whereAny(['title','isi','created_at'], 'LIKE', "%$search%")->orWhereHas('author', function($query) use($search){
        $query->where('name','LIKE','%'.$search.'%');
    })->simplePaginate(8)->withQueryString();
    return view('banyak_berita', ['posts' => $posts]);
})->name('searchMoreBerita');

Route::get('/moreberita/{post:slug}', function (Post $post) {
    $post = Post::findOrFail($post->id);

    $post->update([
        'count' => $post->count + 1
    ]);
    return view('isi_berita', ['post' => $post, 'posts' => Post::latest()->skip(1)->take(4)->get()]);
})->name('satuBerita');

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');
Route::post('/login', [loginController::class, 'auth'])->name('loginUser');
Route::get('/register', [registerController::class, 'index'])->middleware('guest')->name('register');
Route::post('/register', [registerController::class, 'store'])->name('registerUser');
Route::get('/verify', function () {
    return view('verify');
})->name('verify');
Route::post('/verify/{user:email}', [registerController::class, 'verify'])->name('verifyUser');

Route::get('/resetPass', function () {
    return view('lupaPassEmail');
})->name('resetPass');

Route::post('/resetPass/sendRecover', [loginController::class, 'resetPass'])->middleware('guest')->name('password.email');
// Route::post('/resetPass/{user:email}', [loginController::class,'updatePass'])->middleware('guest')->name('password.reset');
Route::get('/reset-password/{token}', function (string $token) {
    
    return view('formResetPass', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password',[loginController::class, 'updatePassword'])->middleware('guest')->name('password.update');

Route::post('/darurat', [LocController::class, 'index'])->middleware('auth')->name('darurat');
Route::post('/laporkan', [laporanController::class, 'store'])->name('laporkan');

Route::get('/adminNormal', [laporanController::class, 'index'])->middleware('admin')->name('adminNormal');
Route::get('/adminNormal/download/{laporan:id}', [laporanController::class, 'download'])->middleware('admin')->name('adminNormalDownload');
Route::post('/adminNormal/{laporan:id}/update', [laporanController::class, 'update'])->name('adminNormalUpdate');
Route::post('/adminNormal/{laporan:id}', [laporanController::class, 'destroy'])->name('adminNormalDestroy');
Route::get('/adminNormal/searchNormal', [laporanController::class, 'searchNormal'])->middleware('admin')->name('adminNormalSearch');


Route::get('/adminDarurat/searchDarurat', [laporanController::class, 'searchDarurat'])->middleware('admin')->name('adminDaruratSearch');
Route::get('/adminDarurat', [laporanController::class, 'daruratTable'])->middleware('admin')->name('adminDarurat');
Route::post('/adminDarurat/{laporan:id}/update', [laporanController::class, 'update'])->name('adminDaruratUpdate');
Route::post('/adminDarurat/{laporan:id}', [laporanController::class, 'destroy'])->name('adminDaruratDestroy');

Route::get('/adminSelesai', [laporanController::class, 'show'])->middleware('admin')->name('adminSelesai');
Route::post('/adminSelesai/{laporan:id}/update', [laporanController::class, 'update'])->name('adminSelesaiUpdate');
Route::post('/adminSelesai/{laporan:id}', [laporanController::class, 'destroy'])->name('adminSelesaiDestroy');
Route::get('/adminSelesai/searchSelesai', [laporanController::class, 'searchSelesai'])->middleware('admin')->name('adminSelesaiSearch');

Route::get('/akunTerverifikasi', [penggunaController::class, 'index'])->middleware('admin')->name('akunTerverifikasi');
Route::get('/akunTerverifikasi/searchAdmin', [penggunaController::class, 'searchAdmin'])->middleware('admin')->name('akunTerverifikasiSearch');
Route::get('/akunTerverifikasiUser/searchUser', [penggunaController::class, 'searchUser'])->middleware('admin')->name('akunTerverifikasiUserSearch');
Route::get('/akunBelumVerifikasiUser/searchUser', [penggunaController::class, 'searchBelumUser'])->middleware('admin')->name('akunBelumVerifikasiUserSearch');
Route::post('/addAdmin', [penggunaController::class, 'store'])->middleware('admin')->name('addAdmin');
Route::post('/akunTerverifikasi/{user:id}/edit', [penggunaController::class, 'edit'])->middleware('admin')->name('akunTerverifikasiEdit');
Route::post('/akunTerverifikasi/{user:id}/destroy', [penggunaController::class, 'destroy'])->middleware('admin')->name('akunTerverifikasiDestroy');

Route::get('/akunTerverifikasiUser', [penggunaController::class, 'indexUser'])->middleware('admin')->name('akunTerverifikasiUser');
Route::post('/akunTerverifikasiUser/{user:id}/edit', [penggunaController::class, 'edit'])->middleware('admin')->name('akunTerverifikasiUserEdit');
Route::post('/akunTerverifikasiUser/{user:id}/destroy', [penggunaController::class, 'destroy'])->middleware('admin')->name('akunTerverifikasiUserDestroy');

Route::get('/akunBelumVerifikasi', [penggunaController::class, 'belumVerifikasi'])->middleware('admin')->name('akunBelumVerifikasi');

Route::get('/manageBerita', [manageBeritaController::class,'index'])->middleware('admin')->name('manageBerita');
Route::post('/manageBerita/{post:slug}/show', [manageBeritaController::class,'show'])->middleware('admin')->name('manageBeritaShow');
Route::post('/manageBerita/{post:slug}', [manageBeritaController::class,'destroy'])->middleware('admin')->name('manageBeritaDestroy');
Route::get('/manageBerita/searchBerita', [manageBeritaController::class, 'searchBerita'])->middleware('admin')->name('manageBeritaSearch');
Route::post('/addBerita', [manageBeritaController::class,'store'])->middleware('admin')->name('addBerita');
Route::post('/kotakSaran', [kotakSaranController::class,'store'])->name('kotakSaran');
Route::get('/manageKotakSaran', [kotakSaranController::class,'index'])->middleware('admin')->name('manageKotakSaran');
Route::post('/manageKotakSaran/{kotakSaran:id}', [kotakSaranController::class,'destroy'])->middleware('admin')->name('manageKotakSaranDestroy');
Route::get('/manageKotakSaran/searchSaran', [kotakSaranController::class, 'searchSaran'])->middleware('admin')->name('manageKotakSaranSearch');


Route::get('/mark-as-read', [laporanController::class,'markAsRead'])->name('mark-as-read');
Route::get('/markAsNotif/{id}', [laporanController::class,'markAsReadNotif'])->name('markSatuNotif');