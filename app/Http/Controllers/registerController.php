<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendEmail;
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
        // $validatedData = $request->validate([
        //     'name' => 'required|max:50',
        //     'username' => ['required', 'min:3', 'max:50', 'unique:users'],
        //     'alamat' => 'required|max:255',
        //     'nohp' => 'required|unique:users',
        //     'password' => 'required|min:5|max:255',
        // ]);
        // // dd($validatedData);
        // User::create($validatedData);

        $data = [
            'name' => 'Syahrizal As',
            'body' => 'Testing Kirim Email di Santri Koding'
        ];
       
        Mail::to('rdh.rhmtllah@gmail.com')->send(new SendEmail($data));
       
        dd("Email Berhasil dikirim.");
        // session()->flash('success','Pengguna Berhasil Ditambahkan!, Silahkan Login');
        toastr()->success('sukses silahkan login.');

        return redirect('/login');
    }
}
