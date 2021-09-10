@extends('backend.layouts.master')
@section('title', 'images')
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


@endsection
