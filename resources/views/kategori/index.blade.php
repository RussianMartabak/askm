@extends('layouts.master')

@section('content')
<a href="/kategori/create" class="btn btn-primary mb-3">Tambah Kategori</a>
<table class="table">
    <thead class="thead-primary">
      <tr>
        <th scope="col"></th>
        <th scope="col">Nama Kategori</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($kategori as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_kategori }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>
                    <a href=""></a>
                </td>
            </tr>
        @empty
            
        @endforelse
    </tbody>
  </table>

@endsection