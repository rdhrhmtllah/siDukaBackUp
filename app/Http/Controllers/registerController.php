<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
            'password' => 'required|min:5|max:255',
        ]);
        // dd($validatedData);
        $validatedData['token'] = Str::random(6);
        
        
        User::create($validatedData);
        
        // dd($validatedData['token']);
        $data = [
            'name' => $validatedData['email'],
            'token' => $validatedData['token']
        ];
       
        Mail::to('ultramen.ipaa@gmail.com')->send(new SendEmail($data));
       
        // dd("Email Berhasil dikirim.");
        // session()->flash('success','Pengguna Berhasil Ditambahkan!, Silahkan Login');
        toastr()->success('sukses silahkan login.');

        return redirect('/verify');
    }
}
