@extends('frontend.layouts.master2')
@section('title', 'الدورات التعليمية')
@section('css')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
@section('content')


@section('article')

    <div class="row d-flex justify-content-around mt-2">
        @foreach ($Courses as $Course)
        <div class="card m-1" style="width:26rem;">
            <img class="card-img-top p-0 m-0" src={{ asset('images/courses/' . $Course->photo) }}
                alt="Card image cap" style="width:100%;height:300px">
            <div class="card-body d-flex flex-column justify-content-start ">
                <div class="card-title">
                    <h2 class="text-center">{{ $Course->title }}</h2>
                </div>
                <div>
                    <p class="text-center p-2">{{ $Course->created_at->toDayDateTimeString() }}</p>
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
                    <p class=" text-center p-2">number vedios :
                        {{ $Course->number_videos }}</p>
                </div>
                <div class=" p-0 m-0 d-flex justify-content-between">
                    <a href="{{ $Course->url }}" class="btn btn-outline-primary btn-block m-1" target="_blank">Seen
                        Tha Course</a>

                    @auth
                    <div class="dropdown show">
                        <a class="btn btn-outline-danger  mt-1 dropdown-toggle m-1" href="#" role="button"
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
                    @endauth


                </div>

            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-5 " style="height: 100px">
        <div class="col-lg-12  d-flex justify-content-center">
            {{ $Courses->links() }}
        </div>
    </div>


    {{-- <div class="blog-pagination">
        <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
        </ul>
    </div> --}}
@endsection
    @section('sort')
        @foreach ($Platforms as $Platform)
            <li><a href="{{ route('Courses.sort', $Platform->id) }}">{{ $Platform->title }} <span></span></a></li>

        @endforeach
    @endsection
    @section('post-side')
            @foreach ($randoms as $random)
            <div class="post-item clearfix">
                <img src="{{ asset('images/courses/' . $random->photo) }}" alt="">
                <h4><a href="{{ $random->url  }}">{{ $random->title }}</a></h4>
                <time datetime="2020-01-01">{{ $random->created_at->toDayDateTimeString()  }}</time>
            </div>
            @endforeach
    @endsection
@endsection
@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>

@endsection
