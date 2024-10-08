<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\user;
use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class penggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = user::latest()->where('is_admin', '=', 1)->simplePaginate(5);
        // dd($datas);
        return view('akunTerverifikasi', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    }
    public function indexUser() 
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = user::latest()->where('is_admin', '=', 0)->where('verified_at', '!=', null)->simplePaginate(5);
        // dd($datas);
        return view('akunTerverifikasiUser', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    }
    public function belumVerifikasi() 
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = user::latest()->where('is_admin', '=', 0)->where('verified_at', '=', null)->simplePaginate(5);
        // dd($datas);
        return view('akunTerverifikasiUser', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
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
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => ['required', 'min:3', 'max:50', 'unique:users'],
            'alamat' => 'required|max:255',
            'nohp' => 'required|unique:users',
            'password' => 'required|min:5|max:255|required_with:confirm-password',
            'confirm-password' => 'required|min:5|same:password',
        ]);
        // dd($validatedData);

        $validatedData['is_admin'] = 1;
        User::create($validatedData);

        // session()->flash('success','Pengguna Berhasil Ditambahkan!, Silahkan Login');
        toastr()->success('Admin Telah Ditambahkan.');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user, Request $request)
    {

        $rules = [
            'name' => 'required|max:50',
            'alamat' => 'required|max:255',

        ];

        if ($request->email != $user->email) {
            $rules['email'] = 'required|min:3|max:50|unique:users';
        }

        if ($request->nohp != $user->nohp) {
            $rules['nohp'] = 'required|unique:users';
        }

        if ($request->password != null) {
            $rules['password'] = 'required|min:5|max:255';
        }
        $validated = $request->validate($rules);
        $validated['password'] = Hash::make($request->password);

        user::where('id', $user->id)->update($validated);
        toastr()->success('Admin Telah Edit.');

        return back();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        user::destroy($user->id);

        toastr()->success("Pengguna Telah Dihapus");
        return back();
    }

    public function dashboard(Request $request){
        if(count($request->all())){
            $year = $request->year;
        }else{
            $year = date('Y');  
        }
    // chart darurat
    // $chartDarurat =[];
    for($i = 1; $i<= 12; $i++){
        $chartDarurat []= laporan::latest()->where('urgensi', '=', 1)->whereYear('created_at', $year)->whereMonth('created_at', $i)->count();
    }
    // chart Normal
    // $chartNormal=[];
    for($i = 1; $i<= 12; $i++){
        $chartNormal []= laporan::latest()->where('urgensi', '=', 0)->whereYear('created_at', $year)->whereMonth('created_at', $i)->count();
    }

    // dd($chartNormal);
    $darurat = laporan::latest()->where('urgensi', '=', 1)->whereMonth('created_at', '9')->get();
    // dd($darurat);

    $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
    $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
    $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
    $totalBerita = Post::all()->count();
    $totalUser = User::all()->count();
    return view('dashboard', ['hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai, 'totalUser'=> $totalUser, 'totalBerita'=> $totalBerita, 'chartNormal' => implode(', ',$chartNormal),'chartDarurat'=> implode(', ',$chartDarurat), 'yearSelect' => $year]);
    }

    public function searchAdmin(Request $request){
        $search = $request->search;
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = user::latest()->where('is_admin', '=', 1)->whereAny(['name', 'email','nohp','alamat'], 'LIKE', "%$search%")->paginate(8);
        // dd($datas);
        return view('akunTerverifikasi', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    } 
    public function searchUser(Request $request){
        $search = $request->search;
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = user::latest()->where('is_admin', 0)->where('verified_at', '!=', null)->whereAny(['name', 'email','nohp','alamat'], 'LIKE', "%$search%")->paginate(8);
        // dd($datas);
        return view('akunTerverifikasiUser', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    } 
    public function searchBelumUser(Request $request){
        $search = $request->search;
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = user::latest()->where('is_admin', 0)->where('verified_at', '=', null)->whereAny(['name', 'email','nohp','alamat'], 'LIKE', "%$search%")->paginate(8);
        // dd($datas);
        return view('akunTerverifikasiUser', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    } 
    
}
