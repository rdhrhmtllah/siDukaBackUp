<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\resetPass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'min:3', 'max:50'],
            'password' => 'required|min:5|max:255',
        ]);
        if($request->rememberMe == "on"){
            
            if (Auth::attempt($credentials, true)) {
                // $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }else{
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }
        toastr()->error("Login salah");
        return back();
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function resetPass(Request $request){
     
    $request->validate(['email' => 'required']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
//    dd($request['email']);
 
    return $status === Password::RESET_LINK_SENT
                ? view('components.resetTerkirim',['email'=> $request['email']])->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
    }
    

    public function updatePassword(Request $request){
        // dd($request->only( 'email','password', 'password_confirmation', 'token'));
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5|max:255|required_with:password_confirmation',
            'password_confirmation' => 'required|min:5|same:password',
        ]);
        $status = Password::reset(
            $request->only( 'email','password', 'password_confirmation', 'token'),
            
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
                    : back()->withErrors(['email' => __($status)]);;
    }
    
    public function confirmUser(Request $request){
        dd($request);
    }
}
