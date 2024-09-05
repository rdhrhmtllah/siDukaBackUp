<?php

namespace App\Http\Controllers;

use App\Mail\resetPass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $credentials = $request->validate([
            'email'=> ['required', 'email'],
        ]);
        
        if(User::where('email', '=', $credentials['email'])->exists()) {
           $penguna = User::where('email', '=', $credentials['email'])->get();
        //    dd($penguna[0]->token);
            $data = [
                'email' => $credentials['email'],
                'token' => $penguna[0]->token,    
            ];
           
            Mail::to($credentials['email'])->send(new resetPass($data));

            $email = $credentials['email'];  
          return view('components.resetTerkirim',['email' => $email]);
        }else{
            toastr()->error("Email salah Atau akun tidak terdaftar");
            return back();
        }
    }
}
