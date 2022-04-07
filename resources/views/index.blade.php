@extends('layouts.master')
@section('title')
    AskM  
@endsection
@section('content')
<div class="my-3">
    <h2 class="text-center">All Questions</h1>
</div>
    
    <a href="/pertanyaan/create"><button class="btn btn-primary my-2">Ask a Question</button></a>
    @foreach ($pertanyaan as $q)
    <div class="border p-3">
        <a href="/pertanyaan/{{$q->id}}"><h5>{{$q->Judul}}</h5></a>
        <p>{{$q->category->nama_kategori}}</p>
        <p>Posted on {{$q->created_at}}</p>
    </div>
    @endforeach
    
    
@endsection
