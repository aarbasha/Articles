@extends('backend.layouts.master')
@section('title', 'Create Section')
@section('content')
    <div class="wrapper mt-5 m-2">
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
                                <li class="breadcrumb-item active"> Add New Section</li>
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
                            <a href="{{ route('Sections.index') }}" class="btn btn-primary float-right">
                                Back
                            </a>
                        </div>
                        <div class="col-lg-12 col-md-12 col">
                            <div class="card row">
                                <form action="{{ route('Sections.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                    placeholder="Enter Your title Section">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for="info">Section info</label>
                                                <textarea name="description" class="form-control" id="" cols="30" rows="10"
                                                    placeholder="Enter Your info Section"></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-primary ml-2">
                                                Create Tha Section
                                            </button>
                                        </div>
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
