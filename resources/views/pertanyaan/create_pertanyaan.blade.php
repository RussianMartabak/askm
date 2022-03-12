@extends('layouts.master')

@section('content')
<form action="/pertanyaan" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Buat Pertanyaan Baru</h2><br><br>
    <div class="form-group">
      <label>Judul Pertanyaan</label><br>
      <input type="text" name="judul" class="form-control" placeholder="isi judul pertanyaan diisi">
    </div>
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>    
    <div class="form-group">
      <label>Content</label><br>
      <textarea name="content" cols="100%" rows="10" placeholder="isi konten pertanyaan diisi"></textarea>
    </div>
    @error('content')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <div class="form-group">
        <label>Thumbnail</label><br>
        <input type="file" name="thumbnail" class="form-control">
    </div>
    @error('thumbnail')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <div class="form-group">
        <label>Kategori</label><br>
        <select name="kategori_id" class="form-control" id="">
            <option value="">---Pilih Kategori---</option>
            @foreach ($kategori as $item)
                <option value="{{ $item->id}}">{{ $item->nama_kategori }}</option>
            @endforeach
        </select>    
    </div>
    @error('kategori_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection