@extends('layouts.master')
@section('title')
    {{$pertanyaan->Judul}}
@endsection
@section('content')

<div class="container">
    <h2 class="mt-3">{{ $pertanyaan->Judul }}</h2>
    <h5>Asked by <a class="profile-link" href="#" style="color:#191C24">{{ $pertanyaan->user->name }}</a> </h5>
    {!! $pertanyaan->content !!}
    <img src="{{asset('pertanyaan_img/'. $pertanyaan->thumbnail)}}" style="max-width: 640px;" alt="">
    <br><br>
    @foreach ($komentar as $item)
      <div class="border p-5">
        <h5>{{$item->user}}</h5>
        <p>{{$item->komentar}}</p>
      </div>
    @endforeach
    <div class="input-group mb-3">
        <form action="/komentar/create/{{$pertanyaan->id}}" method="POST">
          @csrf
          <textarea class="form-control my-3" cols="120" name="komentar" rows="5" placeholder="isi komentar disini"></textarea>
         
          <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Kirim</button>
        </div>
        </form>
        
    </div>

</div>


@endsection