@extends('backend.layouts.master')
@section('title', 'Create Setting New')
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
                            <h1> ADD Setting Home </h1>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Add Setting Home</li>
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
                            </div>

                        </div>
                        <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                            <div>
                                @include('backend.layouts.alert')
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h4 class=" ">Add Setting Home </h4>
                            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">

                                <li class="nav-item text-center" style="width: 200px">
                                    <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill"
                                        href="#custom-content-above-home" role="tab"
                                        aria-controls="custom-content-above-home" aria-selected="true">
                                        Title WebSite
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 200px">
                                    <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill"
                                        href="#custom-content-above-profile" role="tab"
                                        aria-controls="custom-content-above-profile" aria-selected="false">
                                        About Me
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 200px">
                                    <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill"
                                        href="#custom-content-above-messages" role="tab"
                                        aria-controls="custom-content-above-messages" aria-selected="false">
                                        Socil Media Limks
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 200px">
                                    <a class="nav-link" id="custom-content-above-settings-tab" data-toggle="pill"
                                        href="#custom-content-above-settings" role="tab"
                                        aria-controls="custom-content-above-settings" aria-selected="false">
                                        photos
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 200px">
                                    <a class="nav-link" id="custom-content-above-xxx-tab" data-toggle="pill"
                                        href="#custom-content-above-xxx" role="tab" aria-controls="custom-content-above-xxx"
                                        aria-selected="false">
                                        SERVICES
                                    </a>
                                </li>

                                <li class="nav-item text-center" style="width: 200px">
                                    <a class="nav-link" id="custom-content-above-yyy-tab" data-toggle="pill"
                                        href="#custom-content-above-yyy" role="tab" aria-controls="custom-content-above-xxx"
                                        aria-selected="false">
                                        Skilles
                                    </a>
                                </li>

                            </ul>

                            <div class="tab-content" id="custom-content-above-tabContent">
                                <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel"
                                    aria-labelledby="custom-content-above-home-tab">
                                    <div class="card mt-2 p-4">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="row p-2">
                                                <div class="col-lg-12 form-group">
                                                    <label for="">Edit info Title Wew Site</label>
                                                    <input type="text" required class="form-control" name="hero">
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <label for="">Edit info 1 Wew Site</label>
                                                    <input type="text" required class="form-control" name="hero">
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <label for="">Edit info 2 info Wew Site</label>
                                                    <input type="text" required class="form-control" name="hero">
                                                </div>
                                                <div class="col-lg-12 form-group">
                                                    <label for="">Edit info 3 info Wew Site</label>
                                                    <input type="text" required class="form-control" name="hero">
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-success" value="">
                                                        Update Info
                                                    </button>
                                                    <button type="reset" class="btn btn-danger" value="">
                                                        Clear Data
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel"
                                    aria-labelledby="custom-content-above-profile-tab">
                                    <div class="card mt-2 p-4">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="row p-2">

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
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary" value="">
                                                        Update Info
                                                    </button>
                                                    <button type="reset" class="btn btn-danger" value="">
                                                        Clear Data
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel"
                                    aria-labelledby="custom-content-above-messages-tab">
                                    <div class="card mt-2 p-4">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="row p-2">

                                                <div class="col-lg-4 form-group">
                                                    <label for=""> <i class="fab fa-facebook mr-2"
                                                            style="font-size: 25px;color:rgb(3, 3, 255)"></i>Facebook</label>
                                                    <input type="url" required class="form-control" name="facebook"
                                                        value="">
                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label for=""><i class="fab fa-youtube mr-2"
                                                            style="font-size: 25px;color:rgb(216, 0, 0)"></i>Youtube</label>
                                                    <input type="url" required class="form-control" name="youtube">
                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label for=""><i class="fab fa-linkedin mr-2"
                                                            style="font-size: 25px;color:rgb(3, 79, 255)"></i>Linkedin</label>
                                                    <input type="url" required class="form-control" name="linkined">
                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label for=""><i class="fab fa-instagram mr-2"
                                                            style="font-size: 25px;color:rgb(202, 0, 135)"></i>instagram</label>
                                                    <input type="url" required class="form-control" name="instagram">
                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label for=""><i class="fab fa-telegram mr-2"
                                                            style="font-size: 25px;color:rgb(3, 158, 255)"></i>Telegram</label>
                                                    <input type="url" required class="form-control" name="telegram">
                                                </div>
                                                <div class="col-lg-4 form-group">
                                                    <label for=""><i class="fab fa-whatsapp mr-2"
                                                            style="font-size: 25px;color:rgb(1, 186, 17)"></i>Whatsapp</label>
                                                    <input type="url" required class="form-control" name="whatsapp">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="">
                                                        <i class="fas fa-at mr-2"
                                                            style="font-size: 25px;color:rgb(0, 0, 0)"></i>
                                                        Email
                                                    </label>
                                                    <input type="email" required class="form-control" name="email">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="">
                                                        <i class="fas fa-map-marker-alt mr-2"
                                                            style="font-size: 25px;color:rgb(0, 0, 0)"></i>
                                                        Location
                                                    </label>
                                                    <input type="text" required class="form-control" name="location">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="">
                                                        <i class="fas fa-phone-alt mr-2"
                                                            style="font-size: 25px;color:rgb(82, 0, 159)"></i>
                                                        Phone1
                                                    </label>
                                                    <input type="number" required class="form-control" name="phone1">
                                                </div>
                                                <div class="col-lg-6 form-group">
                                                    <label for="">
                                                        <i class="fas fa-phone-alt mr-2"
                                                            style="font-size: 25px;color:rgb(82, 0, 159)"></i>
                                                        Phone2
                                                    </label>
                                                    <input type="number" required class="form-control" name="phone2">
                                                </div>

                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-dark" value="">
                                                        Update Links
                                                    </button>
                                                    <button type="reset" class="btn btn-danger" value="">
                                                        Clear Data
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel"
                                    aria-labelledby="custom-content-above-settings-tab">
                                    <div class="card mt-2 p-4">
                                        <form action="" method="post">
                                            @csrf
                                            <div class="row p-2">
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <img src="https://dummyimage.com/300x300/000/fff" alt=""
                                                                alt="Ahmad Arbasha" class="img-fluid">
                                                            <input type="file" src="" alt="">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <img src="https://dummyimage.com/300x300/000/fff" alt=""
                                                                alt="Ahmad Arbasha" class="img-fluid">
                                                            <input type="file" src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <img src="https://dummyimage.com/300x300/000/fff" alt=""
                                                                alt="Ahmad Arbasha" class="img-fluid">
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
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="custom-content-above-xxx" role="tabpanel"
                                    aria-labelledby="custom-content-above-xxx-tab">
                                    SERVICES
                                </div>

                                <div class="tab-pane fade" id="custom-content-above-yyy" role="tabpanel"
                                    aria-labelledby="custom-content-above-yyy-tab">
                                    slilles
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
