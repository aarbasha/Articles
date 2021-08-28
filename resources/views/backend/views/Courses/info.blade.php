@extends('backend..layouts.master')
@section('title', 'Info Course')
@section('content')
    <div class="content-wrapper p-3 mt-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Courses page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Courses page</li>
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
                        <h4 class=" ">Show Detalis tha Course : <span class="text-primary">
                                {{ $Courses->title }}</span></h4>
                        <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">

                            <li class="nav-item text-center" style="width: 150px">
                                <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill"
                                    href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home"
                                    aria-selected="true">
                                    info
                                </a>
                            </li>

                            <li class="nav-item text-center" style="width: 150px">
                                <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill"
                                    href="#custom-content-above-profile" role="tab"
                                    aria-controls="custom-content-above-profile" aria-selected="false">
                                    Description
                                </a>
                            </li>

                            <li class="nav-item text-center" style="width: 150px">
                                <a class="nav-link" id="custom-content-above-messages-tab" data-toggle="pill"
                                    href="#custom-content-above-messages" role="tab"
                                    aria-controls="custom-content-above-messages" aria-selected="false">
                                    photos Course
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
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <div class="text-center form-control bg-dark">
                                            status
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        @if ($Courses->status == 0)
                                            <div class="bg-primary form-control">In Progress
                                                <i class="fa fa-cog fa-spin fa-3x fa-fw" style="font-size:18px"></i>

                                            </div>
                                        @elseif ($Courses->status == 1)
                                            <div class="bg-success form-control">Completed
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </div>
                                        @elseif($Courses->status == 2)
                                            <div class="bg-danger form-control">not Completed
                                                <i class="fa fa-window-close" aria-hidden="true"></i>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                            <hr>
                                <table class="table">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">title</th>
                                            <th scope="col">Section</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $Courses->id }}</th>
                                            <td>{{ $Courses->title }}</td>
                                            <td>{{ $Courses->section->title }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <hr>
                                <table class="table">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">link</th>
                                            <th scope="col">Number Video</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">updated At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $Courses->info }}</th>
                                            <td>
                                                <a href="{{ $Courses->url }}" class="btn btn-danger" target="_blank">
                                                     Go To Course
                                                </a>
                                            </td>
                                            <td>{{ $Courses->number_videos  }}</td>
                                            <td>{{ $Courses->created_at }}</td>
                                            <td>{{ $Courses->updated_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel"
                                aria-labelledby="custom-content-above-profile-tab">
                            <textarea name="" id="" cols="30" rows="16" class="form-control mt-2" disabled style="font-size: 20px">{{ $Courses->info }}</textarea>


                            </div>

                            <div class="tab-pane fade" id="custom-content-above-messages" role="tabpanel"
                                aria-labelledby="custom-content-above-messages-tab">
                                <img class="card-img-top img-fluid" src={{ asset('images/courses/' . $Courses->photo) }}
                                alt="Card image cap">
                            </div>

                            {{-- <div class="tab-pane fade" id="custom-content-above-settings" role="tabpanel"
                                aria-labelledby="custom-content-above-settings-tab">
                                {{ $Courses->photo }}
                            </div> --}}


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
