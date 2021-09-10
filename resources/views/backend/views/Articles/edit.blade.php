@extends('backend.layouts.master')
@section('title', 'Edit Article')
@section('css')
    <link rel="stylesheet"
        href={{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('admin/dist/css/adminlte.min.css') }}>
    <!-- summernote -->
    <link rel="stylesheet" href={{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}>
    <!-- CodeMirror -->
    <link rel="stylesheet" href={{ asset('admin/plugins/codemirror/codemirror.css') }}>
    <link rel="stylesheet" href={{ asset('admin/plugins/codemirror/theme/monokai.css') }}>
    <!-- SimpleMDE -->
    <link rel="stylesheet" href={{ asset('admin/plugins/simplemde/simplemde.min.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.css">
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
                            <h1>Edit Article</h1>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Edit Article</li>
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
                            <div class="___class_+?14___">
                                <a href="{{ route('Articles.index') }}" class="btn btn-primary flote-right mb-2">
                                    Back
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex justify-content-center" style="position: absolute;">
                            <div style="width: 800px">
                                @include('backend.layouts.alert')
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <h4 class=" ">Edit tha Article : <span class="text-primary">
                                    {{ $articles->title }}</span></h4>
                            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">

                                <li class="nav-item text-center" style="width: 250px">
                                    <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill"
                                        href="#custom-content-above-home" role="tab"
                                        aria-controls="custom-content-above-home" aria-selected="true">
                                        enter your info Article
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 250px">
                                    <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill"
                                        href="#custom-content-above-profile" role="tab"
                                        aria-controls="custom-content-above-profile" aria-selected="false">
                                        Article
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 250px">
                                    <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill"
                                        href="#custom-content-above-messages" role="tab"
                                        aria-controls="custom-content-above-messages" aria-selected="false">
                                        uloude multe images
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 250px">
                                    <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill"
                                        href="#custom-content-above-settings" role="tab"
                                        aria-controls="custom-content-above-settings" aria-selected="false">
                                        photos in Article
                                    </a>
                                </li>

                            </ul>

                            <div class="tab-content" id="custom-content-above-tabContent">
                                <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel"
                                    aria-labelledby="custom-content-above-home-tab">
                                    <div class="col-lg-12 col-md-12 ">
                                        <div class="card row p-4 mt-3">
                                            <form action="{{ route('Articles.update', $articles->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label for="title">Title</label>
                                                        <input type="text" name="title" required class="form-control" id="title"
                                                            value="{{ $articles->title }}">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>Section</label>
                                                        <select name="sections_id" class="form-control"
                                                            style="width: 100%;" required>
                                                            <option value="{{ $articles->sections_id }}" selected>Chois
                                                                Section ..</option>
                                                            @foreach ($Sections as $Section)
                                                                <option value="{{ $Section->id }}">
                                                                    {{ $Section->title }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label>old Section</label>
                                                        <input type="text" disabled name="sections_id"
                                                            class="form-control" id="title"
                                                            value="{{ $articles->section->title }}" required>
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <label for="photo">Uploud Photo</label>
                                                        <input type="file" name="photo" class="form-control" id="photo"
                                                            value="{{ $articles->photo }}">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" class="form-control"
                                                            id="description" required value="{{ $articles->description }}">
                                                    </div>

                                                </div>

                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-info">
                                                        Update Tha
                                                        Article
                                                    </button>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel"
                                    aria-labelledby="custom-content-above-profile-tab">

                                    {{-- <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Summernote
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea class="forn-control" id="summernote" name="article"
                                                rows="10"></textarea>
                                        </div>
                                    </div> --}}

                                    <textarea name="article" id="" cols="30" rows="15" class="form-control mt-3"
                                        style="font-size: 20px" required >{{ $articles->article }}</textarea>
                                </div>

                                </form>

                                <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel"
                                    aria-labelledby="custom-content-above-messages-tab">
                                    <div class="col-lg-12 mt-3">
                                        <form action="{{ route('uplode.photo', $articles->id) }}" method="POST"
                                            class="dropzone" id="my-dropzone">
                                            @csrf
                                        </form>
                                        {{-- <input type="reset" value="Clear Data"> --}}
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel"
                                    aria-labelledby="custom-content-above-settings-tab">

                                    <img src="{{ asset('/images/articles/' . $articles->photo) }}" alt=""
                                        class="img-fluid">


                                </div>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js"></script>

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
