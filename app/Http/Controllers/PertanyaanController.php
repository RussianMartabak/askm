<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB; 
use App\pertanyaan;
use App\kategori;
use RealRashid\SweetAlert\Facades\Alert;
use App\komentar;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $kategori = kategori::all();
        $pertanyaan = pertanyaan::all();
        return view('pertanyaan.index_pertanyaan', compact('pertanyaan', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        $kategori_id = DB::table('kategori')->get();
        return view('pertanyaan.create_pertanyaan',compact('kategori_id', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'       => 'required ',
            'content'     => 'required',
            'kategori_id' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ],
        [
            'judul.required'       => 'judul tidak boleh kosong',
            'content.required'     => 'content harus diisi',
            'kategori_id.required' => 'harus pilih salah satu kategori',
            'thumbnail.max:2048'       => 'ukuran file terlalu besar'
        ]
        );
        $imageName = time() . '.' . $request['thumbnail']->extension();
        $request['thumbnail']->move(public_path('pertanyaan_img'), $imageName);

        $pertanyaan = new pertanyaan;
        $pertanyaan->Judul = $request['judul'];
        $pertanyaan->content = $request['content'];
        $pertanyaan->user_id = Auth::user()->id;
        $pertanyaan->kategori_id = $request['kategori_id'];
        $pertanyaan->thumbnail = $imageName;
        $pertanyaan->save();
        Alert::success('Submit Pertanyaan', 'Berhasil Membuat Pertanyaan');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $komentar = DB::table('komentar')->where('pertanyaan_id', $id)->get();

       $kategori = kategori::all();
       $pertanyaan = pertanyaan::where('id',$id)->first();
       return view('pertanyaan.show_pertanyaan',compact('pertanyaan', 'kategori', 'komentar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
