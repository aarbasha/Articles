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
                        <div class="col-lg-12">
                            <h4 class=" ">Edit Setting Home </h4>

                            <div class="card mt-2 p-4">
                                <form action="{{ route('manger.store') }}" method="post">
                                    @csrf
                                    <div class="row p-2">
                                        <div class="col-lg-4 form-group">
                                            <label for="">
                                                <i class="fas fa-user-tie mr-2"
                                                    style="font-size: 25px;color:rgb(0, 0, 0)"></i>
                                                Enter Your Full Name
                                            </label>
                                            <input type="text"  class="form-control" name="name" value="{{ old('name') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for="">
                                                <i class="fas fa-at mr-2" style="font-size: 25px;color:rgb(0, 0, 0)"></i>
                                                Email
                                            </label>
                                            <input type="email"  class="form-control" name="email"  value="{{ old('email') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for="">
                                                <i class="fas fa-lock mr-2" style="font-size: 25px;color:rgb(0, 0, 0)"></i>
                                                Enter Your Password
                                            </label>
                                            <input type="password"  class="form-control" name="password"  value="{{ old('password') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for="">
                                                <i class="fas fa-map-marker-alt mr-2"
                                                    style="font-size: 25px;color:rgb(0, 0, 0)"></i>
                                                Location
                                            </label>
                                            <input type="text"  class="form-control" name="location"  value="{{ old('location') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for="">
                                                <i class="fas fa-phone-alt mr-2"
                                                    style="font-size: 25px;color:rgb(82, 0, 159)"></i>
                                                Phone1
                                            </label>
                                            <input type="number"  class="form-control" name="phone1" value="{{ old('phone1') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for="">
                                                <i class="fas fa-phone-alt mr-2"
                                                    style="font-size: 25px;color:rgb(82, 0, 159)"></i>
                                                Phone2
                                            </label>
                                            <input type="number"  class="form-control" name="phone2" value="{{ old('phone2') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for=""> <i class="fab fa-facebook mr-2"
                                                    style="font-size: 25px;color:rgb(3, 3, 255)"></i>Facebook</label>
                                            <input type="url"  class="form-control" name="facebook" value="{{ old('facebook') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for=""><i class="fab fa-youtube mr-2"
                                                    style="font-size: 25px;color:rgb(216, 0, 0)"></i>Youtube</label>
                                            <input type="url"  class="form-control" name="youtube" value="{{ old('youtube') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for=""><i class="fab fa-linkedin mr-2"
                                                    style="font-size: 25px;color:rgb(3, 79, 255)"></i>Linkedin</label>
                                            <input type="url"  class="form-control" name="linkedin" value="{{ old('linkedin') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for=""><i class="fab fa-instagram mr-2"
                                                    style="font-size: 25px;color:rgb(202, 0, 135)"></i>instagram</label>
                                            <input type="url"  class="form-control" name="instagram" value="{{ old('instagram') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for=""><i class="fab fa-telegram mr-2"
                                                    style="font-size: 25px;color:rgb(3, 158, 255)"></i>Telegram</label>
                                            <input type="url"  class="form-control" name="telegram" value="{{ old('telegram') }}">
                                        </div>

                                        <div class="col-lg-4 form-group">
                                            <label for=""><i class="fab fa-whatsapp mr-2"
                                                    style="font-size: 25px;color:rgb(1, 186, 17)"></i>Whatsapp</label>
                                            <input type="url"  class="form-control" name="whatsapp" value="{{ old('whatsapp') }}">
                                        </div>

                                        <div class="col-lg-12 mt-4">
                                            <button type="submit" class="btn btn-success" value="">
                                               Add Admin
                                            </button>
                                            <button type="reset" class="btn btn-danger" value="">
                                                Clear Data
                                            </button>
                                        </div>


                                    </div>
                                </form>

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
