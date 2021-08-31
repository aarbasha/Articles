@extends('backend.layouts.master')
@section('title', 'Grid Articles')
@section('content')
    <div class="content-wrapper mt-5 p-2">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-12 d-flex justify-content-venter">
                        <h1>Shwo All Article</h1>

                    </div>
                    <div class="col-lg-12 d-flex justify-content-center mr-5 mt-3" style="position: absolute;">
                        <div>
                            @include('backend.layouts.alert')
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Article</li>
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
                            <div class="card bg-dark p-2" style="height:520px ">

                                <div class="card-header">
                                    {{ $article->created_at }}
                                </div>
                                <img class="card-img-top" src="{{ asset('images/articles/' .  $article->photo) }}" alt="Card image cap" class="img-fluid"  style="max-height: 350px;min-height: 250px">


                                <div class="card-body d-flex flex-column justify-content-around">
                                    <h2 class="card-title my-3 text-center">
                                        {{ $article->title }}
                                    </h2>
                                    <div class="d-flex flex-column justify-content-around">
                                        <a href="{{ route('Articles.show', $article->id) }}" class="btn btn-outline-warning my-1" target="_blank">
                                          viewed as admin <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('oneArticle',$article->id) }}" class="btn btn-outline-success  my-1" target="_blank">
                                            viewed as users <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </a>
                                        <div class="d-flex mt-1 justify-content-around">
                                            <a href="{{ route('Articles.delete', $article->id) }}" class="btn btn-outline-danger  my-1">
                                                Delete <i class="fas fa-trash m-1"></i>
                                            </a>

                                            <a href="{{ route('Articles.edit', $article->id) }}" class="btn btn-outline-primary  my-1">
                                            Edit <i class="fas fa-edit m-1"></i>
                                            </a>

                                            <a href="" class="btn btn-outline-info  my-1">
                                                Shere<i class="fa fa-share m-1" aria-hidden="true"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{-- <div class="row" style="height: 100px">
                    <div class="col-lg-12 d-flex justify-content-center">
                        {{ $articles->links() }}
                    </div>
                </div> --}}

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
