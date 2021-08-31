@extends('backend.layouts.master')
@section('title', ' Courses')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/lity.css') }}">
@endsection
@section('content')
    <div class="content-wrapper p-3 mt-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 mt-2">
                        <h1>Courses page</h1>
                    </div>
                    <div class="col-sm-6 mt-2">
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
                    <div class="col-12">
                        {{-- <div class="card"> --}}
                        <div class="card-header">
                            <h3 class="card-title">View all Courses</h3>
                        </div>
                        <div class='row w-100'>
                            <div class="col-lg-12 d-flex justify-content-end mr-5 mt-3">
                                <a href="{{ route('Courses.create') }}" class="btn btn-outline-primary mr-2">
                                    <i class="fa fa-plus p-2" aria-hidden="true"></i> Add New Courses
                                </a>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                                <div>
                                    @include('backend.layouts.alert')
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body col-lg-12">
                            <table id="example1"
                                class="table  table-responsive-sm table-responsive-md table-responsive-lg w-100">

                                <thead class="bg-light">
                                    <tr class="text-center">
                                        <th>id</th>
                                        <th>Title</th>
                                        <th>Platforms</th>
                                        <th>Status</th>
                                        <th>link</th>
                                        <th>photo</th>
                                        <th>Number Video</th>
                                        <th>Processes</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    {{-- $page->notes as $note --}}
                                    @foreach ($Courses as $Course)
                                        <tr class="text-center">
                                            <th>{{ $Course->id }}</th>
                                            <th>{{ $Course->title }}</th>
                                            <th>{{ $Course->Platform->title }}</th>
                                            <th>
                                                @if ($Course->status == 0)
                                                    <span class="text-primary">In Progress
                                                        <i class="fa fa-cog fa-spin fa-3x fa-fw" style="font-size:18px"></i>
                                                    </span>
                                                @elseif ($Course->status == 1)
                                                    <span class="text-success">Completed
                                                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                    </span>
                                                @elseif($Course->status == 2)
                                                    <span class="text-danger">not Completed
                                                        <i class="fa fa-window-close" aria-hidden="true"></i>
                                                    </span>
                                                @endif
                                            </th>
                                            <th>
                                                @if ($Course->status == 0)
                                                    <a href="{{ $Course->url }}" class="btn btn-primary" target="_blank">
                                                        تابع الكورس
                                                    </a>
                                                @elseif ($Course->status == 1)
                                                    <a href="{{ $Course->url }}" class="btn btn-success"  target="_blank">
                                                        تابع الكورس
                                                    </a>
                                                @elseif($Course->status == 2)
                                                    <a href="{{ $Course->url }}"class="btn btn-danger" target="_blank">
                                                        تابع الكورس
                                                    </a>
                                                @endif

                                            </th>
                                            <th>
                                                <a href="{{ asset('images/courses/' . $Course->photo) }}" data-lity>
                                                    <img src="{{ asset('images/courses/' . $Course->photo) }}" alt=""
                                                        style="width: 50px;height:50px" class="img-fluid">
                                                </a>

                                            </th>
                                            <th>
                                                {{ $Course->number_videos }}
                                            </th>
                                            <td class="d-flex justify-content-around">

                                                <a href="{{ route('Courses.show', $Course->id) }}"
                                                    class="btn rounded-circle btn-outline-success mx-1 btn-sm">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <a href="{{ route('Courses.edit', $Course->id) }}"
                                                    class="btn rounded-circle btn-outline-primary mx-1 btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="{{ route('Courses.delete', $Course->id) }}"
                                                    class="btn rounded-circle btn-outline-danger mx-1 btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                        {{-- </div> --}}
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

    <script src="{{ asset('js/app.js') }}" ></script>
    <script src={{ asset('admin/plugins/jquery/jquery.min.js') }}></script>
    <script src="{{ asset('js/lity.js') }}"></script>
@endsection
@section('js')

@endsection
