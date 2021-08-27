@extends('backend.layouts.master')
@section('title', 'Create Course')
{{ route('Sections.store') }}
@section('content')

    <div class="wrapper mt-5 p-2">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add New Course</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Add New Course</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-end my-2">
                            <a href="{{ route('Courses.index') }}"
                                class="btn btn-primary float-right">
                                Back
                            </a>
                        </div>
                        <div class="col-lg-12 col-md-12 col">
                            <div class="card row">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('Courses.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Your title Course">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Section</label>
                                                <select name="sections_id" class="form-control"
                                                    style="width: 100%;">
                                                    @foreach ($Sections as $Section)
                                                        <option value="{{ $Section->id }}">
                                                            {{ $Section->title }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="title">number of videos</label>
                                                <input type="number" name="number_videos" class="form-control" id="number_videos" placeholder="Enter the number of videos">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Status Tha Course</label>
                                                <select name="status" class="form-control">
                                                       <option value="" selected>Choose Status ..</option>
                                                       <option value="0" class="text-primary">In Progress</option>
                                                       <option value="1" class="text-success">Completed</option>
                                                       <option value="2" class="text-danger">not Completed</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="url">Link Tha Course</label>
                                                <input type="url" name="url" class="form-control" id="url" placeholder="Enter Your url Course">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="photo">Uploud Photo</label>
                                                <input type="file" name="photo" class="form-control" id="photo">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for="info">Course info</label>
                                                <textarea name="info" class="form-control" id="" cols="30"
                                                rows="5" placeholder="Enter Your info Course"></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-primary">
                                                Create Tha Course
                                            </button>
                                        </div>



                                    </div>
                                </form>

                                {{-- <div class="col-lg-12 col">
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Dropzone.js <small><em>jQuery File
                                                        Upload</em> like
                                                    look</small></h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="actions" class="row">
                                                <div class="col-lg-12">
                                                    <div class="btn-group w-100">
                                                        <span class="btn btn-success col fileinput-button">
                                                            <i class="fas fa-plus"></i>
                                                            <span>Add files</span>
                                                        </span>
                                                        <button type="submit"
                                                            class="btn btn-primary col start">
                                                            <i class="fas fa-upload"></i>
                                                            <span>Start upload</span>
                                                        </button>
                                                        <button type="reset"
                                                            class="btn btn-warning col cancel">
                                                            <i class="fas fa-times-circle"></i>
                                                            <span>Cancel upload</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-flex align-items-center">
                                                    <div class="fileupload-process w-100">
                                                        <div id="total-progress"
                                                            class="progress progress-striped active"
                                                            role="progressbar" aria-valuemin="0"
                                                            aria-valuemax="100" aria-valuenow="0">
                                                            <div class="progress-bar progress-bar-success"
                                                                style="width:0%;" data-dz-uploadprogress>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table table-striped files" id="previews">
                                                <div id="template" class="row mt-2">
                                                    <div class="col-auto">
                                                        <span class="preview">
                                                            <img src="data:," alt="" data-dz-thumbnail />
                                                        </span>
                                                    </div>
                                                    <div class="col d-flex align-items-center">
                                                        <p class="mb-0">
                                                            <span class="lead" data-dz-name></span>
                                                            (<span data-dz-size></span>)
                                                        </p>
                                                        <strong class="error text-danger"
                                                            data-dz-errormessage></strong>
                                                    </div>
                                                    <div class="col-4 d-flex align-items-center">
                                                        <div class="progress progress-striped active w-100"
                                                            role="progressbar" aria-valuemin="0"
                                                            aria-valuemax="100" aria-valuenow="0">
                                                            <div class="progress-bar progress-bar-success"
                                                                style="width:0%;" data-dz-uploadprogress>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-primary start">
                                                                <i class="fas fa-upload"></i>
                                                                <span>Start</span>
                                                            </button>
                                                            <button data-dz-remove
                                                                class="btn btn-warning cancel">
                                                                <i class="fas fa-times-circle"></i>
                                                                <span>Cancel</span>
                                                            </button>
                                                            <button data-dz-remove
                                                                class="btn btn-danger delete">
                                                                <i class="fas fa-trash"></i>
                                                                <span>Delete</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div> --}}

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
@endsection
