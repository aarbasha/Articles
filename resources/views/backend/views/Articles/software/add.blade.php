@extends('backend.layouts.master')
@section('title')
@section('content')
    <div class="wrapper mt-5">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid mx-2">
                    <div class="row my-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
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

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">اضافة مقال جديد</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row ">
                        <div class="col-lg-12 my-3 d-flex justify-content-end">
                            <a href="{{ route('software') }}" class="btn btn-primary"> العودة الى الخلف </a>
                        </div>
                    </div>
                    <form action="" class="form-group">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="">عنوان المقال</label>
                                <input type="text" class="form-control" name="" value="">
                                <label for="">وصف المقال</label>
                                <input type="text" class="form-control" name="" value="">
                                <label for="">رفع صور المقال</label>
                                <input type="file" name="" id="" class="form-control">
                                <label for="">وضع رابط في المقال </label>
                                <input type="url" name="" id="" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for=""> المقال</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-6">
                                <input type="submit" value="نشر المقال" class="btn btn-success">

                                <input type="reset" value="مسح بيانات المقال" class="btn btn-danger">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>

@endsection
