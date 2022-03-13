<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\pertanyaan;
use App\komentar;

class KomentarController extends Controller
{
    //
    function create(Request $request, $id) {
        $komentar = new komentar;
        $komentar->komentar = $request['komentar'];
        $komentar->user_id = Auth::user()->id;
        $komentar->pertanyaan_id = $id;
        $komentar->save();
        return redirect('/pertanyaan/' . $id);
    }
}
