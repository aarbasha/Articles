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
                            <h1> Admin Manger </h1>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Admin Manger </li>
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
                            <a href="{{ route('home') }}" class="btn btn-primary flote-right mx-2 mb-2">
                                Back
                            </a>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center" style="position: fixed;left:100px">
                            <div>
                                @include('backend.layouts.alert')
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <h4 class=" ">Add Setting Home </h4>
                            <div class="tab-content" id="custom-content-above-tabContent">
                                <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel"
                                    aria-labelledby="custom-content-above-home-tab">
                                    <div class="card mt-2 p-4">
                                        <div class="card-header">
                                            <h3 class="card-title">View all articles</h3>
                                        </div>
                                        <div class='row w-100'>
                                            <div class="col-lg-12 d-flex justify-content-end mr-5 mt-3">
                                                <a href="{{ route('manger.create') }}"
                                                    class="btn btn-outline-primary mr-2">
                                                    <i class="fa fa-plus p-2" aria-hidden="true"></i>
                                                    Add New Manger
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body col-lg-12">
                                            <table id="example1"
                                                class="table  table-responsive-sm table-responsive-md table-responsive-lg w-100">

                                                <thead class="bg-light">
                                                    <tr class="text-center">
                                                        <th>id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone1</th>
                                                        <th>phone2</th>
                                                        <th>location</th>
                                                        <th>Processes</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($users as $user)
                                                    <tr class="text-center">
                                                        <th>{{ $user->id }}</th>
                                                        <th>{{ $user->name }}</th>
                                                        <th>{{ $user->email }}</th>
                                                        <th>{{ $user->phone1 }}</th>
                                                        <th>{{ $user->phone2 }}</th>
                                                        <th>{{ $user->location }}</th>
                                                        <td class="d-flex justify-content-between">
                                                            <a href="{{ route('manger.show', $user->id) }}"
                                                                class="btn rounded-circle btn-outline-success btn-sm">
                                                                <i class="fas fa-eye m-1"></i>
                                                            </a>

                                                            <a href="{{ route('manger.edit', $user->id) }}" class="btn rounded-circle btn-outline-info btn-sm">
                                                                <i class="fas fa-edit m-1"></i>
                                                            </a>

                                                            <a href="{{ route('manger.delete', $user->id) }}" class="btn rounded-circle btn-outline-danger btn-sm">
                                                                <i class="fas fa-trash m-1"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
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


@endsection
@section('js')


@endsection
