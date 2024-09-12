<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\laporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class manageBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
    $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
    $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
    $datas = Post::latest()->Paginate(8);
    return view('manageBerita', ['datas'=> $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
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
    public function store(Request $request){
    // {   dd($request->all());
        $validate = $request->validate([
            "title" => "required",
            "status" => "required",
            "foto" => "image|file|max:3024",
            "isi" => "required",
        ]);

        $validate['author_id'] = Auth::user()->id;
        $validate['slug'] = Str::slug($request['title']);
        
        $file = $request->file('foto');
        $file_extension = str_replace(' ', '_', $file->getClientOriginalName());
        $filename = $file_extension;
        $validate['foto'] = $filename;
        $request->file('foto')->storeAs('post-image', $filename);
        // dd($validate);   

        Post::create($validate);
        toastr()->success('Berita berhasil Dibuat');
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('isi_berita', ['post' => $post, 'posts' => Post::latest()->skip(1)->take(4)->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        toastr()->success("Berita Telah Dihapus");
        return back();
    }

    public function searchBerita(Request $request){
        $search = $request->search;
        
        $darurat = laporan::latest()->where('urgensi', '=', 1)->where('keterangan', '=', 0)->count();
        $normal = laporan::latest()->where('urgensi', '=', 0)->where('keterangan', '=', 0)->count();
        $selesai = laporan::latest()->where('keterangan', '=', 1)->count();
        $datas = Post::latest()->whereAny(['title','isi','created_at'], 'LIKE', "%$search%")->orWhereHas('author', function($query) use($search){
            $query->where('name','LIKE','%'.$search.'%');
        })->paginate(8);
        // dd($datas);
        return view('manageBerita', ['datas' => $datas, 'hitungDarurat' => $darurat, 'hitungNormal' => $normal, 'hitungSelesai' => $selesai]);
    } 

    
}
