@extends('backend.layouts.master')
@section('title', ' Articles')
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
                        <h1>Articles page</h1>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Articles page</li>
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
                                <h3 class="card-title">View all articles</h3>
                            </div>
                            <div class='row w-100'>
                                <div class="col-lg-12 d-flex justify-content-end mr-5 mt-3">
                                    <a href="{{ route('Articles.create') }}" class="btn btn-outline-primary mr-2">
                                        <i class="fa fa-plus p-2" aria-hidden="true"></i> Add New Article
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
                                <table id="example1" class="table  table-responsive-sm table-responsive-md table-responsive-lg w-100">

                                    <thead class="bg-light">
                                        <tr class="text-center">
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>Section</th>
                                            <th>Description</th>
                                            <th>Date Created</th>
                                            <th class="img-fluid">Photo</th>
                                            <th>Processes</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        {{-- $page->notes as $note --}}
                                        @foreach ($articles as $article)
                                            <tr class="text-center">
                                                <th>{{ $article->id }}</th>
                                                <th>{{ $article->title }}</th>
                                                <th>{{ $article->section->title }}</th>
                                                <th>{{ $article->description }}</th>
                                                <th>{{ $article->created_at }}</th>
                                                <th class="img-fluid">
                                                    {{-- use lity --}}
                                                    <a href="{{ asset('images/articles/' .  $article->photo) }}" data-lity>
                                                        <img class="card-img-top"
                                                        src="{{ asset('images/articles/' .  $article->photo) }}" alt="Card image cap"
                                                        {{-- class="img-fluid" --}}
                                                        style="width: 50px;height: 50px">
                                                    </a>

                                                </th>

                                                <td class="d-flex justify-content-between">

                                                    <a href="{{ route('Articles.show', $article->id) }}"
                                                        class="btn rounded-circle btn-outline-success btn-sm">
                                                         <i class="fas fa-eye m-1"></i>
                                                    </a>

                                                    <a href="{{ route('Articles.edit', $article->id) }}"
                                                        class="btn rounded-circle btn-outline-info btn-sm">
                                                         <i class="fas fa-edit m-1"></i>
                                                    </a>

                                                    <a href="{{ route('Articles.delete', $article->id) }}"
                                                        class="btn rounded-circle btn-outline-danger btn-sm">
                                                         <i class="fas fa-trash m-1"></i>
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
