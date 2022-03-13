@extends('layouts.master')
@push('script')
<script src="https://cdn.tiny.cloud/1/9bkhy7p4pdlge94o4clfttolnguzglvkkargghls59i743jf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
@endpush

@push('style')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endpush




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
        <select name="kategori_id" class="js-example-basic-single width:100%;" id="">
            <option value="">---Pilih Kategori---</option>
            @foreach ($kategori_id as $item)
                <option value="{{ $item->id}}">{{ $item->nama_kategori }}</option>
            @endforeach
        </select>    
    </div>
    @error('kategori_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
      
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
@endsection