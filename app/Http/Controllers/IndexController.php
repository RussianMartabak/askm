<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use App\pertanyaan;

class IndexController extends Controller
{
    //
    function Index() {
        $kategori = kategori::all();
        $pertanyaan = pertanyaan::all();
        return view('index', compact('kategori', 'pertanyaan'));
    }
}
