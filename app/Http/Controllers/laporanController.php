<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\notifikasiLaporan;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->simplePaginate(5);
        // dd($datas);
        return view('normalLaporanAdmin', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    }
    public function daruratTable()
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->simplePaginate(5);
        // dd($datas);
        return view('daruratLaporanAdmin', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->foto->getClientOriginalName());

        $validate = $request->validate([
            "judulKejadian" => "required",
            "nohp" => "required",
            "urgensi" => "required",
            "lokasi" => "required",
            "foto" => "image|file|max:3024",
            "kronologi" => "required",
        ]);

        $validate['user_id'] = Auth::user()->id;

        $file = $request->file('foto');
        $file_extension = str_replace(' ', '_', $file->getClientOriginalName());
        $filename = $file_extension;
        $validate['foto'] = $filename;
        $request->file('foto')->storeAs('post-image', $filename);

        $laporan = laporan::create($validate);
        // toastr()->success('Laporan Diterima, Kami akan segera menindak laporan.');
        // return redirect('/')->with('addLaporan', 'Berhasil Menambahkan Laporan');
        
        if($laporan){
            $laporan['pembuat'] = Auth::user()->name;
         
            $adminUsers = User::where('is_admin', 1)->get();
            foreach ($adminUsers as $admin) {
                $admin->notify(new notifikasiLaporan($laporan));
            }
            toastr()->success('Laporan Diterima, Kami akan segera menindak laporan.');
            return redirect('/');
        }else{
            toastr()->success('Gagal Mengirim Laporan, Kesalahan Mengirim!');
            return back();
        }

    }

    public function markAsRead()
    {
          Auth::user()->unreadNotifications->markAsRead();
          return redirect()->back();
     }

    /**
     * Display the specified resource.
     */
    public function show(laporan $laporan)
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = laporan::latest()->where('keterangan', '=', 1)->simplePaginate(5);
        // dd($datas);
        return view('laporanSelesai', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, laporan $laporan)
    {
        $laporanUbah = laporan::findOrFail($laporan->id);

        if ($laporanUbah->keterangan == 0) {

            $laporanUbah->update([
                'keterangan' => '1',
                // 'updated_at' => date('Y-m-d H:i:s'),
            ]);
            toastr()->success("Laporan Telah Diselesaikan");

        } else {
            $laporanUbah->update([
                'keterangan' => '0',
                // 'updated_at' => date('Y-m-d H:i:s'),
            ]);
            toastr()->success("Kasus Diangkat Kembali");

        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(laporan $laporan)
    {
        laporan::destroy($laporan->id);

        toastr()->success("Data Telah Dihapus");
        return back();
    }
}
