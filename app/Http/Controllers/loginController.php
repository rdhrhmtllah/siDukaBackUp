<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\resetPass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

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
    

    public function updatePass(Request $request, user $user){
        $token = $request->session()->token();
        $token = csrf_token();
        dd($user);
        $penguna = User::where('email', '=', $user)->get();
    }
    
    public function confirmUser(Request $request){
        dd($request);
    }
}
