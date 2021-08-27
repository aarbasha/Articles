@extends('backend.layouts.master')
@section('title', 'Article')
@section('content')
    <div class="content-wrapper mt-5 p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Description Article</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Description Article</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">

                                    <li class="nav-item text-center" style="width: 150px">
                                        <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill"
                                            href="#custom-content-above-home" role="tab"
                                            aria-controls="custom-content-above-home" aria-selected="true">
                                            Article Info
                                        </a>
                                    </li>

                                    <li class="nav-item text-center" style="width: 150px">
                                        <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill"
                                            href="#custom-content-above-profile" role="tab"
                                            aria-controls="custom-content-above-profile" aria-selected="false">
                                            images
                                        </a>
                                    </li>

                                    <li class="nav-item text-center" style="width: 150px">
                                        <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill"
                                            href="#custom-content-above-messages" role="tab"
                                            aria-controls="custom-content-above-messages" aria-selected="false">
                                            Tha Article
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content" id="custom-content-above-tabContent">
                                    <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel"
                                        aria-labelledby="custom-content-above-home-tab">

                                        <table class="table table-hover">
                                            <thead class="bg-dark">
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Section</th>
                                                    <th scope="col">Data Write Article</th>
                                                    <th scope="col">Data Edit Article</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ $articles->id }}</th>
                                                    <td>{{ $articles->title }}</td>
                                                    <td>{{ $articles->section->title }}</td>
                                                    <td>{{ $articles->created_at }}</td>
                                                    <td>{{ $articles->updated_at }}</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        <table class="table table-hover mt-3">
                                            <thead class="bg-dark">
                                                <tr>
                                                    <th scope="col">Description Short</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $articles->description }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel"
                                        aria-labelledby="custom-content-above-profile-tab">
                                        <div class="col-lg-8">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100"
                                                            src="https://dummyimage.com/600x400/000/fff" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100"
                                                            src="https://dummyimage.com/600x400/000/f00" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100"
                                                            src="https://dummyimage.com/600x400/000/00f" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel"
                                        aria-labelledby="custom-content-above-messages-tab">
                                        <div class="col-lg-12 d-flex justify-content-center p-3">

                                            <textarea style="font-size: 20px" disabled name="" class="form-control" id=""
                                                cols="30" rows="17">{{ $articles->article }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
