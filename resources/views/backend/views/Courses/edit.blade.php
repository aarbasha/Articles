@extends('backend.layouts.master')
@section('title', 'Edit Course')
@section('content')

    <div class="wrapper mt-5 p-2">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Course</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Edit Course</li>
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
                            <a href="{{ route('Courses.index') }}" class="btn btn-primary">
                                Back
                            </a>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                            <div>
                                @include('backend.layouts.alert')
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col">
                            <div class="card  row">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('Courses.update', $Courses->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                    placeholder="Enter Your title Course" value="{{ $Courses->title }}">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Platforms</label>
                                                <select name="platforms_id" class="form-control">
                                                    @foreach ($Platforms as $Platform)
                                                        <option value="{{ $Platform->id }}">{{ $Platform->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="title">number of videos</label>
                                                <input type="number" name="number_videos" class="form-control"
                                                    id="number_videos" placeholder="Enter the number of videos"
                                                    value="{{ $Courses->number_videos }}">
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label>Status Tha Course</label>
                                                <select name="status" class="form-control">
                                                    <option value="" selected>Choose Status ..</option>
                                                    <option value="0" class="text-primary">In Progress</option>
                                                    <option value="1" class="text-success">Completed</option>
                                                    <option value="2" class="text-danger">not Completed</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label for="title">Stetus Old</label>
                                                {{-- <p class="form-control"> --}}
                                                    @if ($Courses->status == 0)
                                                            <p class="bg-primary form-control">In Progress
                                                                <i class="fa fa-cog fa-spin fa-3x fa-fw" style="font-size:18px"></i>

                                                            </p>
                                                        @elseif ($Courses->status == 1)
                                                            <p class="bg-success form-control">Completed
                                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                            </p>
                                                        @elseif($Courses->status == 2)
                                                            <p class="bg-danger form-control">not Completed
                                                                <i class="fa fa-window-close" aria-hidden="true"></i>
                                                            </p>
                                                        @endif
                                                {{-- </p> --}}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-6">
                                                <label for="url">Link Tha Course</label>
                                                <input type="url" name="url" class="form-control" id="url"
                                                    placeholder="Enter Your url Course" value="{{ $Courses->url }}">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="photo">Uploud Photo</label>
                                                <input type="file" name="photo" class="form-control" id="photo"
                                                    value="{{ $Courses->photo }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for="info">Course info</label>
                                                <textarea name="info" class="form-control" id="" cols="30" rows="5"
                                                    placeholder="Enter Your info Course">{{ $Courses->info }}</textarea>
                                            </div>

                                            <button type="submit" class="btn btn-warning">
                                                Update Tha Course
                                            </button>
                                        </div>
                                    </div>
                                </form>


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
