@extends('backend.layouts.master')
@section('title', ' Sections ')
@section('css')
@section('content')
    <div class="content-wrapper p-3 mt-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-2">Sections Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right m-2">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sections Page </li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
{{-- ********************************************************************** --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="">
                            <div class="card-header text-center">
                                <h3 class="card-title ">View All Categories </h3>
                            </div>
                            <div class='row w-100'>
                                <div class="col-lg-12 d-flex justify-content-end mr-5 mt-3">
                                    <a href="{{ route('Sections.create') }}" class="btn btn-info mr-2">
                                        <i class="fa fa-plus p-2" aria-hidden="true"></i> Add New Section
                                    </a>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                                    <div>
                                        @include('backend.layouts.alert')
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table  table-responsive-sm table-responsive-md table-responsive-lg w-100">
                                    <thead class="bg-dark">
                                        <tr class="text-center">
                                            <th>id</th>
                                            <th>title</th>
                                            <th>Description</th>
                                            <th>Date Created</th>
                                            <th>Processes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Sections as $Section)
                                            <tr class="text-center">
                                                <td>{{ $Section->id }}</td>
                                                <td>{{ $Section->title }} </td>
                                                <td>{{ $Section->description }}</td>
                                                <td>{{ $Section->created_at }}</td>
                                                <td class="d-flex justify-content-around">
                                                    <a href="{{ route('Sections.edit', $Section->id) }}"
                                                        class="btn rounded-circle btn-outline-primary btn-sm">
                                                         <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('Sections.delete', $Section->id) }}"
                                                        class="btn rounded-circle btn-outline-danger btn-sm">
                                                         <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
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
    <script src="{{ asset('js/app.js') }}" ></script>
@endsection

