<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendEmail;
use App\Notifications\notifikasiLaporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([

           
            'name' => 'required|max:50',
            'email' => ['required', 'min:3', 'max:50', 'unique:users'],
            'alamat' => 'required|max:255',
            'nohp' => 'required|unique:users',
            'password' => 'required|min:5|max:255|required_with:confirm-password',
            'confirm-password' => 'required|min:5|same:password',
            'termsConditions' => 'accepted',
        ]);
        // dd($validatedData);
        $validatedData['token'] = Str::random(6);
        
        
        $user=User::create($validatedData);
        Auth::login($user);

      
        
        // dd($validatedData['token']);
        $data = [
            'name' => $validatedData['email'],
            'token' => $validatedData['token']
        ];

       
        Mail::to($validatedData['email'])->send(new SendEmail($data));
       
        // dd("Email Berhasil dikirim.");
        // session()->flash('success','Pengguna Berhasil Ditambahkan!, Silahkan Login');
        toastr()->success('Sukses Mendaftar, silahkan login!');
            return redirect('/verify');

       
    }

 

    public function verify(Request $request, User $user){
        $validatedData = $request->validate([
            'token' => "required|min:6|max:6"
        ]);
        if($user->token != $validatedData["token"]){
            toastr()->error("Token Salah Silahkan cek kembali Email Anda!");
            return back();
        }else{
            $verify['verified_at'] = now();
            user::where('email', $user->email)->update($verify);
            toastr()->success("Akun Telah Tervalidasi!");
            return redirect("/");
        }
        // dd($validatedData['token']);

    }
}
