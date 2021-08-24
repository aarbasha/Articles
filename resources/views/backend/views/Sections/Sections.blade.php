@extends('backend.layouts.master')
@section('title', 'صفحة الاقسام ')
@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- DataTables -->
    <link rel="stylesheet" href={{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('admin/dist/css/adminlte.min.css') }}>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
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
                                <table id="example1" class="table table-bordered table-striped">

                                    <thead>
                                        <tr class="text-center">
                                            <th>رقم القسم</th>
                                            <th>عنوان القسم</th>
                                            <th>وصف القسم</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Sections as $Section)
                                            <tr class="text-center">
                                                <td>{{ $Section->id }}</td>
                                                <td>{{ $Section->title }} </td>
                                                <td>{{ $Section->description }}</td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('Sections.edit', $Section->id) }}"
                                                        class="btn btn-primary btn-sm mx-2">تعديل</a>
                                                    <a href="delete/{{ $Section->id }}"
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
@section('js')
    <script src={{ asset('admin/plugins/jquery/jquery.min.js') }}></script>
    <script src={{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
    <script src={{ asset('admin/plugins/jszip/jszip.min.js') }}></script>
    <script src={{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}></script>
    <script src={{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}></script>
    <script src={{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>
    <script src={{ asset('admin/dist/js/adminlte.min.js') }}></script>
    <script src={{ asset('admin/dist/js/demo.js') }}></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(Document).ready(function() {
            $('.alert').fadeOut(8000);
        });
    </script>

@endsection
