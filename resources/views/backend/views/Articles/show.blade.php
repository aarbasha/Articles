@extends('backend.layouts.master')
@section('title', 'المقالات')
@section('css')

@endsection
@section('content')
    <div class="content-wrapper mt-5 p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>تفاصيل المقال</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">تفاصيل المقال</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">تفاصيل مقالة : {{ $articles->title }}</h3>
                            </div>

                            <div class='row w-100'>

                                <div class="col-lg-6 p-2">

                                    <div class="d-flex justify-content-center flex-wrap flex-row-reverse m-3">
                                        <h2 class="p-2 mx-2 rounded bg-primary w-100 text-center"> :تفاصيل المقال</h2>
                                    </div>
                                    <div class="d-flex justify-content-stert flex-row-reverse m-3">
                                        <h6 class="p-2 mx-2 rounded text-danger d-flex  flex-nowrap">
                                            :عنوان المقال <i class="fa fa-circle ml-1" aria-hidden="true"></i> </h6>
                                        <h6 class="p-2 mx-2 rounded text-dark">{{ $articles->title }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-stert flex-row-reverse m-3">
                                        <h6 class="p-2 mx-2 rounded text-danger d-flex  flex-nowrap">
                                            :اسم القسم <i class="fa fa-circle ml-1" aria-hidden="true"></i> </h6>
                                        <h6 class="p-2 mx-2 rounded text-primary">{{ $articles->section->title }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-stert flex-row-reverse m-3">
                                        <h6 class="p-2 mx-2 rounded text-danger d-flex  flex-nowrap">
                                            :ناريخ كتابة المقال <i class="fa fa-circle ml-1" aria-hidden="true"></i> </h6>
                                        <h6 class="p-2 mx-2 rounded text-dark">{{ $articles->created_at }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-stert flex-row-reverse m-3">
                                        <h6 class="p-2 mx-2 rounded text-danger d-flex  flex-nowrap">
                                            :ناريخ كتابة المقال <i class="fa fa-circle ml-1" aria-hidden="true"></i> </h6>
                                        <h6 class="p-2 mx-2 rounded text-dark">{{ $articles->updated_at }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-stert flex-row-reverse m-3">
                                        <h6 class="p-2 mx-2 rounded text-danger d-flex  flex-nowrap">
                                            :وصف قصير للمقال <i class="fa fa-circle ml-1" aria-hidden="true"></i> </h6>
                                        <h6 class="p-2 mx-2 rounded text-dark">{{ $articles->description }}</h6>
                                    </div>
                                    <div class="d-flex justify-content-stert flex-row-reverse m-3">
                                        <h6 class="p-2 mx-2 rounded text-danger d-flex  flex-nowrap">
                                            : المقال <i class="fa fa-circle ml-1" aria-hidden="true"></i> </h6>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="https://dummyimage.com/600x400/000/fff"
                                                    alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="https://dummyimage.com/600x400/000/f00"
                                                    alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="https://dummyimage.com/600x400/000/00f"
                                                    alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>

                                    </div>
                                    {{-- <img src="https://dummyimage.com/600x400/000/fff" alt="" class="img-fluid mb-2"> --}}
                                </div>


                            </div>

                            <div class='row w-100'>
                                <div class="col-lg-12 d-flex justify-content-stert flex-row-reverse p-3">
                                    <textarea style="font-size: 20px" disabled name="" class="form-control" id="" cols="30"
                                        rows="10">{{ $articles->article }}</textarea>

                                </div>


                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
