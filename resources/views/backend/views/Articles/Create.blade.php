@extends('backend.layouts.master')
@section('title', 'Create Articles')
@section('css')
    <link rel="stylesheet" href={{ asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback") }}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset("admin/plugins/fontawesome-free/css/all.min.css") }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset("admin/dist/css/adminlte.min.css") }}>
    <!-- summernote -->
    <link rel="stylesheet" href={{ asset("admin/plugins/summernote/summernote-bs4.min.css") }}>
    <!-- CodeMirror -->
    <link rel="stylesheet" href={{ asset("admin/plugins/codemirror/codemirror.css") }}>
    <link rel="stylesheet" href={{ asset("admin/plugins/codemirror/theme/monokai.css") }}>
    <!-- SimpleMDE -->
    <link rel="stylesheet" href={{ asset("admin/plugins/simplemde/simplemde.min.css") }}>
@endsection
@section('content')

    <div class="wrapper mt-5 mx-2">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <h1>Add New Article</h1>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Add New Article</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-end">
                            <div class="">
                                <a href="{{ route('Articles.index') }}" class="btn btn-primary flote-right mb-2">
                                    Back
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 ">
                            <div class="card row p-3">
                                <form action="{{ route('Articles.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="title">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Section</label>
                                            <select name="sections_id" class="form-control" style="width: 100%;">
                                                @foreach ($Sections as $Section)
                                                    <option value="{{ $Section->id }}">
                                                        {{ $Section->title }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" class="form-control" id="description">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="photo">Uploud Photo</label>
                                            <input type="file" name="photo" class="form-control" id="photo">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">

                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Summernote
                                                </h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <textarea id="summernote" name="article" rows="10"></textarea>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary">
                                            Post Tha
                                            Article
                                        </button>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                        </div>
                                        <!-- /.col-->
                                    </div>


                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@section('js')
    <!-- jQuery -->
    <script src={{ asset('admin/plugins/jquery/jquery.min.js') }}></script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('admin/dist/js/adminlte.min.js') }}></script>
    <!-- Summernote -->
    <script src={{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}></script>
    <!-- CodeMirror -->
    <script src={{ asset('admin/plugins/codemirror/codemirror.js') }}></script>
    <script src={{ asset('admin/plugins/codemirror/mode/css/css.js') }}></script>
    <script src={{ asset('admin/plugins/codemirror/mode/xml/xml.js') }}></script>
    <script src={{ asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}></script>
    <!-- AdminLTE for demo purposes -->
    <script src{{ asset('admin/dist/js/demo.js') }}></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>

@endsection
