@extends('backend.layouts.master')
@section('title', 'عرض المقالات')
@section('css')

@endsection
@section('content')
    <div class="content-wrapper mt-5 p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>عرض جميع المقالات</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                            <li class="breadcrumb-item active">تفاصيل المقال</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row w-100">
                    @foreach ($articles as $article)
                    <div class="col-lg-4">
                        <div class="card" style="width: 25rem;height:500px">
                            <div class="card-header text-center">
                                {{  $article->created_at   }}
                            </div>
                            <img class="card-img-top" src="https://dummyimage.com/600x400/f00/fff" alt="Card image cap">
                            <div class="card-body d-flex flex-column justify-content-around">
                              <h5 class="card-title my-2 text-center">{{ $article->title  }}</h5>
                              <p class="card-text my-2 text-center">{{ $article->description  }}</p>
                              <a href="{{ route('Articles.show',$article->id) }}" class="btn btn-warning">قراءة المقال</a>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <div class="item mx-2">
                                    <a href="{{ route('Articles.delete',$article->id) }}" class="btn btn-danger">delete</a>
                                </div>
                                <div class="item mx-2">
                                    <a href="{{ route('Articles.edit',$article->id) }}" class="btn btn-primary">edit</a>
                                </div>
                                <div class="item mx-2">
                                    <a href="" class="btn btn-info">Shere</a>
                                </div>

                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
