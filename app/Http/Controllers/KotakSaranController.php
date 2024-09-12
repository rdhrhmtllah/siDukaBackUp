<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\kotakSaran;
use Illuminate\Http\Request;
use App\Http\Requests\StorekotakSaranRequest;
use App\Http\Requests\UpdatekotakSaranRequest;


class kotakSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = kotakSaran::latest()->simplePaginate(8);
        return view('manageKotakSaran', ['datas'=> $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
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
        // dd($request->all());
        $validate = $request->validate([
            "nama"=> "required",
            "email"=> "required",
            "nohp"=>"required",
            "pesan"=>"required",
        ]);

        kotakSaran::create($validate);
        toastr()->success("Terimakasih Telah Memberikan Saran");
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(kotakSaran $kotakSaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kotakSaran $kotakSaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekotakSaranRequest $request, kotakSaran $kotakSaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kotakSaran $kotakSaran)
    {
        kotakSaran::destroy($kotakSaran->id);

        toastr()->success("Saran Telah Dihapus");
        return back();
    }
    public function searchSaran(Request $request){
        $search = $request->search;
        
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = kotakSaran::latest()->whereAny(['nama','email','nohp','pesan','created_at'], 'LIKE', "%$search%")->paginate(8);
        // dd($datas);
        return view('manageKotakSaran', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    } 
}
