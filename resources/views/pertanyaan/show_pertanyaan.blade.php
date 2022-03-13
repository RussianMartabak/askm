@extends('layouts.master')

@section('content')

<div class="container">
    <h2 class="">{{ $pertanyaan->Judul }}</h2><br>
    <h4>Ditanyakan oleh {{ Auth::user()->name }}</h4>
    {{ $pertanyaan->content }}
    <img src="{{asset('pertanyaan_img/'. $pertanyaan->thumbnail)}}" alt="">
    <br><br>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="isi komentar disini">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">Kirim</button>
        </div>
    </div>

</div>


@endsection