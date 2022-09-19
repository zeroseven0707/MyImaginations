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
    @foreach ($post as $item)
            <form action="/edit/story/{{ $item['post_id'] }}" class="content" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="title" value="{{ $item['title'] }}">
                </div>
                <div>
                    <label for="category">Kategori</label>
                    <select name="category" id="category" class="form-control">
                        <option value="{{ $item['category_id'] }}">{{ $item['category_name'] }}</option>
                        @foreach ($category as $cat)
                            <option value="{{ $cat['category_id'] }}">{{ $cat['category_name'] }}</option>
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
                        {{ $item['isi'] }}
                    </textarea>
                    </div>
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-default">Simpan</button>
    </form>
    @endforeach
  </div>
  

@endsection