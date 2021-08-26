@extends('backend.layouts.master')
@section('title', 'اضافة قسم ')

@section('content')
    <div class="content-wrapper mt-5 p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>اضافة قسم جديد</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
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
                                <h3 class="card-title"></h3>
                            </div>

                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card card-primary">
                                    {{-- <div class="card-header">
                                        <h3 class="card-title">اضافة قسم جديد</h3>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-lg-12 m-2 d-flex justify-content-end ">
                                            <a href="{{ route('Sections.index') }}" class="btn btn-success mr-5"> رجوع الى الخلف </a>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="{{ route('Sections.store') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="title">عنوان القسم</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">وصف القسم</label>
                                                <textarea id="" name="description" class="form-control" cols="30"
                                                    rows="10"></textarea>

                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">حفظ القسم</button>
                                        </div>
                                    </form>
                                </div>
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

@endsection
