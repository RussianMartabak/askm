@extends('layouts.master')
@section('title')
    ZTS Forum   
@endsection
@section('content')
<div class="my-3">
    <h2 class="text-center">Semua Pertanyaan</h1>
</div>
    
    <a href="/pertanyaan/create"><button class="btn btn-primary my-2">Buat Pertanyaan</button></a>
    @foreach ($pertanyaan as $q)
    <div class="border p-3">
        <a href="/pertanyaan/{{$q->id}}"><h5>{{$q->Judul}}</h5></a>
    </div>
    @endforeach
    
    
@endsection
