@extends('backend.layouts.master')
@section('title', 'صفحة الاقسام ')
@section('css')
@section('content')
    <div class="content-wrapper p-3 mt-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-2">صفحة الاقسام</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right m-2">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">صفحة الاقسام</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
{{-- ********************************************************************** --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h3 class="card-title ">جدول لعرض جميع الاقسام </h3>
                            </div>
                            <div class='row w-100'>
                                <div class="col-lg-12 d-flex justify-content-end mr-5 mt-3">
                                    <a href="{{ route('Sections.create') }}" class="btn btn-outline-primary">اضافة قسم
                                        جديد</a>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                                    @include('backend.views.Sections.alert')
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table  table-responsive-sm table-responsive-md table-responsive-lg w-100">
                                    <thead>
                                        <tr class="text-center">
                                            <th>رقم القسم</th>
                                            <th>عنوان القسم</th>
                                            <th>وصف القسم</th>
                                            <th>تاريخ انشاء القسم</th>
                                            <th>تاريخ اخر تعديل القسم</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Sections as $Section)
                                            <tr class="text-center">
                                                <td>{{ $Section->id }}</td>
                                                <td>{{ $Section->title }} </td>
                                                <td>{{ $Section->description }}</td>
                                                <td>{{ $Section->created_at }}</td>
                                                <td>{{ $Section->updated_at }}</td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('Sections.edit', $Section->id) }}"
                                                        class="btn btn-primary btn-sm mx-2">تعديل</a>
                                                    <a href="{{ route('Sections.delete', $Section->id) }}"
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
    <script src="{{ asset('js/app.js') }}" ></script>
@endsection

