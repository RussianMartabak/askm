<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class IndexController extends Controller
{
    //
    function Index() {
        $kategori = kategori::all();
        return view('index', compact('kategori'));
    }
}
