@extends('template.header')
@section('content')
    <head>

  <title>AdminLTE 3 | Editors</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="../../plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="../../plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css">
</head>
<div class="container w-75">
    <h2 class="text-center" style="margin-top: 70px">
        Post
    </h2>
    <form action="/story/input/input" class="content" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="title">
                </div>
                <div>
                    <label for="category">Kategori</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Pilih Kategori</option>
                        @foreach ($category as $item)
                            <option value="{{ $item['category_id'] }}">{{ $item['category_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                <label for="img">Gambar</label>
                <input type="file" class="form-control" id="img" name="img">
                </div>
                <label for="summernote">Isi</label>
            <div class="row">
                <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-body">
                    <textarea id="summernote" name="isi">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                    </div>
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-default">Simpan</button>
    </form>
  </div>
  

@endsection

