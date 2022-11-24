@extends('admin.template.master')
@push('css')


<!-- <link rel="stylesheet" href="{{asset('public/AdminLTE/plugins/summernote/summernote-bs4.min.css')}}"> -->
  <!-- CodeMirror -->
<link rel="stylesheet" href="{{asset('public/AdminLTE/plugins/codemirror/codemirror.css')}}">
<link rel="stylesheet" href="{{asset('public/AdminLTE/plugins/codemirror/theme/monokai.css')}}">
<!-- SimpleMDE -->
<!-- <link rel="stylesheet" href="{{asset('public/AdminLTE/plugins/simplemde/simplemde.min.css')}}"> -->

@endpush

@section('judul','Edit Postingan')
@section('content')

<div class="card card-info">
    <div class="card-header">
        <h5> <a href="{{route('home')}}"><i class="fa-solid fa-left"></i></a> Edit Postingan
        </h5>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('home.update',$post->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$post->judul}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"  value="{{$post->price}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('waktu') is-invalid @enderror" name="waktu"  value="{{$post->waktu}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{$post->deskripsi}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Thumnail</label>
                
                <div class="col-sm-3 col-4">
                    <img src="{{asset('public/images/thumnail/'.$post->thumnail)}}" class="w-100">
                </div>
                <div class="col-sm-7 col-8">
                    <input type="file" name="thumnail" class="form-control @error('thumnail') is-invalid @enderror" accept="image/*">
                </div>
            </div>


            <textarea id="summernote" name="content">
                {!! $post->content !!}
            </textarea>

            <button class="btn btn-primary float-right" type="submit">Simpan</button>

        <!-- /.card-footer -->
    </form>
</div>

@endsection
@push('js')

<!-- <script src="{{asset('public/AdminLTE/plugins/summernote/summernote-bs4.min.js')}}"></script> -->
<!-- CodeMirror -->
<script src="{{asset('public/AdminLTE/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('public/AdminLTE/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('public/AdminLTE/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('public/AdminLTE/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote({
        height: 450
    })

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })



</script>

@endpush