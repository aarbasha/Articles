@extends('backend.layouts.master')
@section('title', 'صفحة المقالات ')
@section('css')
@section('content')
    <div class="content-wrapper p-3 mt-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 mt-2">
                        <h1>صفحة المقالات</h1>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">صفحة المقالات</li>
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
                                <h3 class="card-title">جدول لعرض جميع المقالات</h3>
                            </div>
                            <div class='row w-100'>
                                <div class="col-lg-12 d-flex justify-content-end mr-5 mt-3">
                                    <a href="{{ route('Articles.create') }}" class="btn btn-outline-primary">اضافة مقال
                                        جديد</a>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                                    @include('backend.views.Articles.alert')
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body col-lg-12">
                                <table id="example1" class="table table-bordered table-striped">

                                    <thead class="">
                                        <tr class="text-center">
                                            <th>رقم المقال</th>
                                            <th>عنوان المقال</th>
                                            <th>نوع المقال</th>
                                            <th>وصف المقال</th>
                                            <th>تاريخ كتابة المقال </th>
                                            <th class="img-fluid">صورة المقال</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        {{-- $page->notes as $note --}}
                                        @foreach ($articles as $article)
                                            <tr class="text-center">
                                                <th>{{ $article->id }}</th>
                                                <th>{{ $article->title }}</th>
                                                <th>{{ $article->title }}</th>
                                                <th>{{ $article->description }}</th>
                                                <th>{{ $article->created_at }}</th>
                                                <th class="img-fluid">{{ $article->photo }}</th>
                                                <td class="d-flex justify-content-center">

                                                    <a href="{{ route('Articles.show', $article->id) }}"
                                                        class="btn btn-success btn-sm mx-2">عرض</a>

                                                    <a href="{{ route('Articles.edit', $article->id) }}"
                                                        class="btn btn-primary btn-sm mx-2">تعديل</a>

                                                    <a href="{{ route('Articles.delete', $article->id) }}"
                                                        class="btn btn-danger btn-sm mx-2">حذف</a>
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

@endsection
