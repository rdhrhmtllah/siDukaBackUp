<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        laporan::create($validate);
        toastr()->success('Laporan Diterima, Kami akan segera menindak laporan.');
        return redirect('/')->with('addLaporan', 'Berhasil Menambahkan Laporan');
        // return view('user', compact('currentUserInfo'));

    }
}
