@extends('backend.layouts.master')
@section('title', 'Create Articles')
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
                            <h1> Create New Article </h1>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Create New Article</li>
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
                        <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                            <div>
                                @include('backend.layouts.alert')
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h4 class=" ">Create tha Article </h4>
                            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">

                                <li class="nav-item text-center" style="width: 250px">
                                    <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill"
                                        href="#custom-content-above-home" role="tab"
                                        aria-controls="custom-content-above-home" aria-selected="true">
                                        Enter your info Article
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
                                        Uloude multe images
                                    </a>
                                </li>

                                {{-- <li class="nav-item text-center" style="width: 150px">
                                <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill"
                                    href="#custom-content-above-settings" role="tab"
                                    aria-controls="custom-content-above-settings" aria-selected="false">
                                    photos
                                </a>
                            </li> --}}

                            </ul>

                            <div class="tab-content" id="custom-content-above-tabContent">
                                <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel"
                                    aria-labelledby="custom-content-above-home-tab">
                                    <div class="col-lg-12 col-md-12 ">
                                        <div class="card row p-4 mt-3">
                                            <form action="{{ route('Articles.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label for="title">Title</label>
                                                        <input type="text" name="title" class="form-control" id="title"
                                                            value="{{ old('title') }}" required>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>Section</label>
                                                        <select name="sections_id" class="form-control"
                                                            style="width: 100%;" required>
                                                            {{-- <option value=""  selected>Chois Section ..</option> --}}
                                                            @foreach ($Sections as $Section)
                                                                <option value="{{ $Section->id }}">
                                                                    {{ $Section->title }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-lg-6">
                                                        <label for="photo">Uploud Photo</label>
                                                        <input type="file" name="photo" class="form-control" id="photo"
                                                            value="{{ old('photo') }}" required>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label for="description">Description</label>
                                                        <input type="text" name="description" class="form-control"
                                                            id="description" value="{{ old('description') }}" required>
                                                    </div>

                                                </div>

                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-outline-primary">
                                                        Post
                                                        Article
                                                    </button>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel"
                                    aria-labelledby="custom-content-above-profile-tab">


                                    {{-- <div class="card-header">
                                            <h3 class="card-title">
                                                Summernote
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea class="forn-control" id="summernote" name="article"
                                                rows="10" ></textarea>
                                        </div> --}}

                                    <div class="form-group mt-2">
                                        <textarea name="article" id="article" cols="30" rows="15" class="form-control"
                                            style="font-size: 20px" required
                                            placeholder="Enter Your New Article">{{ old('article') }}</textarea>
                                    </div>

                                </div>

                                </form>

                                <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel"
                                    aria-labelledby="custom-content-above-messages-tab">
                                    <div class="col-lg-12 mt-3">



                                        <div class="card card-default">
                                            <div class="card-header">
                                                <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em>
                                                        like look</small></h3>
                                            </div>
                                            <div class="card-body">
                                                <div id="actions" class="row">
                                                    <div class="col-lg-6">
                                                        <div id="actions" class="btn-group w-100">
                                                            <span class="btn btn-success col fileinput-button">
                                                                <i class="fas fa-plus"></i>
                                                                <span>Add files</span>
                                                            </span>
                                                            <button type="submit" class="btn btn-primary col start">
                                                                <i class="fas fa-upload"></i>
                                                                <span>Start upload</span>
                                                            </button>
                                                            <button type="reset" class="btn btn-warning col cancel">
                                                                <i class="fas fa-times-circle"></i>
                                                                <span>Cancel upload</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 d-flex align-items-center">
                                                        <div class="fileupload-process w-100">
                                                            <div id="total-progress"
                                                                class="progress progress-striped active" role="progressbar"
                                                                aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                <div class="progress-bar progress-bar-success"
                                                                    style="width:0%;" data-dz-uploadprogress></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table table-striped files" id="previews">
                                                    <div id="template" class="row mt-2">
                                                        <div class="col-auto">
                                                            <span class="preview"><img src="data:," alt=""
                                                                    data-dz-thumbnail /></span>
                                                        </div>
                                                        <div class="col d-flex align-items-center">
                                                            <p class="mb-0">
                                                                <span class="lead" data-dz-name></span>
                                                                (<span data-dz-size></span>)
                                                            </p>
                                                            <strong class="error text-danger" data-dz-errormessage></strong>
                                                        </div>
                                                        <div class="col-4 d-flex align-items-center">
                                                            <div class="progress progress-striped active w-100"
                                                                role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                                aria-valuenow="0">
                                                                <div class="progress-bar progress-bar-success"
                                                                    style="width:0%;" data-dz-uploadprogress></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto d-flex align-items-center">
                                                            <div class="btn-group">
                                                                <button class="btn btn-primary start">
                                                                    <i class="fas fa-upload"></i>
                                                                    <span>Start</span>
                                                                </button>
                                                                <button data-dz-remove class="btn btn-warning cancel">
                                                                    <i class="fas fa-times-circle"></i>
                                                                    <span>Cancel</span>
                                                                </button>
                                                                <button data-dz-remove class="btn btn-danger delete">
                                                                    <i class="fas fa-trash"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                Visit <a href="https://www.dropzonejs.com">dropzone.js documentation</a> for
                                                more examples and
                                                information about the plugin.
                                            </div>
                                        </div>

                                        {{-- <form action="/test" method="POST" class="dropzone" id="my-dropzone"
                                            enctype="multipart/form-data">
                                            @csrf
                                        </form> --}}
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
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
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

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "photos/",
            // tokem: "_(Csrf_token)" ,// Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>

@endsection
