@extends('layouts.master')

@section('content')

@forelse ($pertanyaan as $item)
  <div class="container">
    <h2 class="">{{ Auth::user()->name }}</h2><br>
    <h4>{{ $item->Judul }}</h4>
    <p>{{ $item->content }}</p>
    <img src="{{asset('pertanyaan_img/'. $item->thumbnail)}}" style="max-width: 640px;" class="post-img" alt="">
    <br><br>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="isi komentar disini">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">Kirim</button>
        </div>
    </div>
</div><br><br>
<hr>  
@empty
  <h4>Belum ada pertanyaan</h4>  
@endforelse





@endsection
