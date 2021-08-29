@extends('backend.layouts.master')
@section('title', 'Grid Courses')
@section('content')
    <div class="content-wrapper mt-5 p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-12 d-flex justify-content-venter">
                        <h1>Shwo All Courses</h1>
                        <div style="position: absolute;top:50;left:150px">
                            @include('backend.views.Articles.alert')
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row w-100  p-2">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <h2>بســـم لله الرحمن الرحيم</h2>

                    </div>
                    <div class="col-lg-12 d-flex justify-content-center h3 m-3">
                        هنا سوف تجد بإذن الله الدورات التعليمية الموجودة في قناتنا على اليوتيوب
                    </div>
                </div>
                <div class="row w-100  p-2">
                    <div class="col-lg-12">
                        <div class="row w-100 d-flex justify-content-start ">
                            @foreach ($Courses as $Course)
                                <div class="card   m-1" style="width: 18rem;">
                                    <img class="card-img-top" src={{ asset('images/courses/' . $Course->photo) }}
                                        alt="Card image cap" style="width:100%;height:200px">
                                    <div class="card-body d-flex flex-column justify-content-center ">
                                        <div class="card-title">
                                            <h2 class="text-center">{{ $Course->title }}</h2>
                                        </div>
                                        <div>
                                            <p class="text-center p-2 font-weight-bold">Status Course :
                                                @if ($Course->status == 0)
                                                    <span class="text-primary font-weight-bold">In Progress
                                                        <i class="fa fa-cog fa-spin fa-3x fa-fw" style="font-size:18px"></i>
                                                    </span>
                                                @elseif ($Course->status == 1)
                                                    <span class="text-success font-weight-bold">Completed
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </span>
                                                @elseif($Course->status == 2)
                                                    <span class="text-danger font-weight-bold">not Completed
                                                        <i class="fa fa-window-close" aria-hidden="true"></i>
                                                    </span>
                                                @endif
                                            </p>
                                            <p class="bg-dark text-center p-2">number vedios :
                                                {{ $Course->number_videos }}</p>
                                        </div>
                                        <div class="card-footer p-0 m-0 d-flex justify-content-between">
                                            <a href="{{ $Course->url }}" class="btn btn-primary m-1" target="_blank">Seen
                                                Tha Course</a>

                                            <div class="dropdown show">
                                                <a class="btn btn-success  mt-1 dropdown-toggle m-1" href="#" role="button"
                                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Admin
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a href="{{ route('Courses.delete', $Course->id) }}"
                                                        class="btn dropdown-item d-flex justify-content-between my-1">
                                                        Delete <i class="fas fa-trash m-1"></i>
                                                    </a>

                                                    <a href="{{ route('Courses.edit', $Course->id) }}"
                                                        class="btn dropdown-item d-flex justify-content-between my-1">
                                                        Edit <i class="fas fa-edit m-1"></i>
                                                    </a>

                                                    <a href="{{ route('Courses.show', $Course->id) }}"
                                                        class="btn dropdown-item d-flex justify-content-between my-1">
                                                        Info 'Admin' <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                    </a>

                                                    <a href=""
                                                        class="btn dropdown-item d-flex justify-content-between my-1">
                                                        Shere <i class="fa fa-share m-1" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md 8" style="width: 200px;height:100px">
                        {{-- !! $Courses->links() !! --}}


                    </div>

                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
