@extends('backend.layouts.master')
@section('title', 'Create Platform')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"
        integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <div class="wrapper mt-5 m-2">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add New Platform Education</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"> Add New Platform</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-end my-2">
                            <a href="{{ route('Platforms.index') }}" class="btn btn-primary float-right">
                                Back
                            </a>
                        </div>
                        <div class="row" style="position: absolute">
                            <div class="col-lg-12 d-flex justify-content-center" style="margin-right: 200px">
                                <div class="" style="width: 900px;">
                                    @include('backend.layouts.alert')
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col">
                            <div class="card row">
                                <form action="{{ route('Platforms.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-12">

                                                <label for="">أدخل اسم المنصة التعليمية</label>
                                                <input type="text" name="title" class="form-control my-2" id="title"
                                                    placeholder="Enter Your title Platform" value="{{ old('title') }}">
                                                {{-- <label for="">أو اختر اسم منصة تعليمية من هنا</label>
                                                <select name="title" id="title" class="form-control">
                                                    <option value="" class="form-control">

                                                    </option>
                                                    <option value="Youtube"  class="form-control">
                                                        Youtube
                                                    </option>
                                                    <option value="udemy" class="form-control">
                                                        udemy
                                                    </option>
                                                    <option value="Coursera"  class="form-control">
                                                        Coursera
                                                    </option>
                                                    <option value="edX"  class="form-control">
                                                        edX
                                                    </option>
                                                    <option value="SKILLSHARE"  class="form-control">
                                                        SKILLSHARE
                                                    </option>
                                                    <option value="CodeCademy"  class="form-control">
                                                        CodeCademy
                                                    </option>
                                                    <option value="SKILLSHARE"  class="form-control">
                                                        SKILLSHARE
                                                    </option>

                                                </select> --}}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for="info">الوصف عن المنصة</label>
                                                <textarea name="description" class="form-control" id="" cols="30"
                                                    rows="10" placeholder="Enter Your info Platform">{{ old('description') }}</textarea>
                                            </div>

                                            <button type="submit" class="btn btn-outline-danger ml-2">
                                                Create Tha Platforms
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js"
        integrity="sha512-ywaT8M9b+VnJ+jNG14UgRaKg+gf8yVBisU2ce+YJrlWwZa9BaZAE5GK5Yd7CBcP6UXoAnziRQl40/u/qwVZi4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
