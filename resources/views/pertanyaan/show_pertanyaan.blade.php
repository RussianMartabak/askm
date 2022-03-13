@extends('layouts.master')

@section('content')

<div class="container">
    <h2 class="">{{ $pertanyaan->Judul }}</h2><br>
    <h4>Ditanyakan oleh {{ Auth::user()->name }}</h4>
    {{!! $pertanyaan->content !!}}
    <img src="{{asset('pertanyaan_img/'. $pertanyaan->thumbnail)}}" alt="">
    <br><br>
    @foreach ($komentar as $item)
      <div class="border p-3">
        <h5></h5>
        <p>{{$item->komentar}}</p>
      </div>
    @endforeach
    <div class="input-group mb-3">
        <form action="/komentar/create/{{$pertanyaan->id}}" method="POST">
          @csrf
          <input type="text" class="form-control" name="komentar" placeholder="isi komentar disini">
          <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Kirim</button>
        </div>
        </form>
        
    </div>

</div>


@endsection