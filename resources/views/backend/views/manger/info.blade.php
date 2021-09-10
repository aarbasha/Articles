@extends('backend.layouts.master')
@section('title', 'Create Articles')
@section('css')

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
                            <h1> Edit Setting Home </h1>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Edit Setting Home</li>
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
                                <a href="{{ route('home') }}" class="btn btn-primary flote-right mb-2">
                                    Back
                                </a>
                                <a href="" class="btn btn-primary flote-right mb-2">
                                    add links
                                </a>
                            </div>

                        </div>
                        <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                            <div>
                                @include('backend.layouts.alert')
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h4 class=" ">Edit Setting Home </h4>

                            <div class="card mt-2 p-4">

                                <div class="row p-2">
                                    <div class="col-lg-6 form-group">
                                        <label for="">Edit info 2 info Wew Site</label>
                                        <input type="text" required class="form-control" name="hero">
                                    </div>

                                    <div class="col-lg-6 form-group">
                                        <label for="">Edit info 3 info Wew Site</label>
                                        <input type="text" required class="form-control" name="hero">
                                    </div>

                                    <div class="col-lg-12 form-group">
                                        <label for="">Edit Title Name Enginerc</label>
                                        <input type="text" required class="form-control" name="hero">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label for="">Edit Title Other Name Enginerc</label>
                                        <input type="text" required class="form-control" name="hero">
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <label for="">Edit Your Info Descripton</label>
                                        <textarea name="" required class="form-control" id="" cols="30"
                                            rows="10"></textarea>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="https://dummyimage.com/300x300/000/fff" alt="" alt="Ahmad Arbasha"
                                                    class="img-fluid">
                                                <input type="file" src="" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="https://dummyimage.com/300x300/000/fff" alt="" alt="Ahmad Arbasha"
                                                    class="img-fluid">
                                                <input type="file" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <img src="https://dummyimage.com/300x300/000/fff" alt="" alt="Ahmad Arbasha"
                                                    class="img-fluid">
                                                <input type="file" src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <button type="submit" class="btn btn-dark" value="">
                                            Update Photos
                                        </button>
                                        <button type="reset" class="btn btn-danger" value="">
                                            Clear Data
                                        </button>
                                    </div>


                                </div>

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
    {{-- <!-- jQuery -->
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
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js"></script>

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
        }) --}}
    </script> --}}

@endsection
