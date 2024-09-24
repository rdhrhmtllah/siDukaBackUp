<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\laporan;
use App\Mail\mailNotifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\notifikasiLaporan;
use Stevebauman\Location\Facades\Location;

class LocController extends Controller
{
    public function index(Request $request)
    {
        // $ip = Request::getClientIp(true);
        dd($request->all());

        $getip = $request->ip();
        // $ip = '127.0.0.1:8080/$getip'; /* Static IP address */
        $currentUserInfo = Location::get('127.0.0.1:80/$ip');
        // $dataDarurat = collect([$request->get('nama'), $request->get('nohp'), $request->get('alamat'), $currentUserInfo->latitude, $currentUserInfo->longitude]);

        $validate['user_id'] = Auth::user()->id;
        $validate['nohp'] = Auth::user()->nohp;
        $validate['lokasi'] = $currentUserInfo->latitude . ',' . $currentUserInfo->longitude;
        $validate['urgensi'] = '1';

        // dd($validate);

        $laporan=laporan::create($validate);
        if($laporan){
            $laporan['pembuat'] = Auth::user()->name;
         
            $adminUsers = User::where('is_admin', 1)->get();
            foreach ($adminUsers as $admin) {
                $admin->notify(new notifikasiLaporan($laporan));
                $data =[
                    'urgensi'=> 'normal',
                    'lokasi'=> $laporan->lokasi,
                ];
                Mail::to($admin->email)->send(new mailNotifikasi($data));

            }
        }
        toastr()->success('Laporan Diterima, Kami akan segera menindak laporan.');
        return redirect('/')->with('addLaporan', 'Berhasil Menambahkan Laporan');
        // return view('user', compact('currentUserInfo'));

    }
}
