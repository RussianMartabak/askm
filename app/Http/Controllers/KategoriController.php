<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('kategori.index_kategori', compact('kategori')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('kategori.create', compact('kategori'));
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
            'nama_kategori' => 'required ',
            'keterangan' => 'required'

        ],
        [
            'nama_kategori.required' => 'nama kategori tidak boleh kosong',
            'keterangan.required'    => 'keterangan harus diisi'
        ]
        );

        
        $kategori = new kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->keterangan = $request->keterangan;
        $kategori->save();  
        Alert::success('Tambah', 'Tambah data kategori berhasil');
        return redirect('/kategori');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //for showing specific thing based on parameter passed in url
        $kategoriTarget = kategori::find($id);
        $kategori = kategori::all();
        //pertanyaan yang belong to kategori tesebut
        $pertanyaans = $kategoriTarget->pertanyaan;
        return view('kategori.show_kategori', compact('kategoriTarget', 'kategori', 'pertanyaans'));
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
