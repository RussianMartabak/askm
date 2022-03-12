@extends('layouts.master')

@section('content')
<form action="/kategori" method="POST">
    @csrf
    <h2>Buat Kategori Baru</h2><br><br>
    <div class="form-group">
      <label>Nama Kategori</label><br>
      <input type="text" name="nama_kategori" class="form-control weight:30%;" >
    </div>
    @error('nama_kategori')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>    
    <div class="form-group">
      <label>Keterangan</label><br>
      <input type="text" name="keterangan" class="form-control">
    </div>
    @error('keterangan')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection