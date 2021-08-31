@extends('frontend.layouts.master2')
@section('title', 'المقالات')
@section('content')

@section('article')
    @foreach ($Articles as $Article)
        <article class="entry">

            <div class="entry-img">
                <img src={{ asset('images/articles/' . $Article->photo) }} alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <a href="{{ route('oneArticle', $Article->id) }}" target="_blank">{{ $Article->title }}</a>
            </h2>

            <div class="entry-meta">
                <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                        <a href="blog-single.html">
                            {{-- {{ Auth::user()->name }} --}}
                        </a>
                    </li>

                    <li class="d-flex align-items-center">
                        <i class="bi bi-clock"></i>
                        <a href="blog-single.html">
                            <time datetime="">
                                {{ $Article->created_at->toDayDateTimeString() }}
                            </time>
                        </a>
                    </li>

                    {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                                <a href="blog-single.html">12
                                    Comments</a></li> --}}
                </ul>
            </div>

            <div class="entry-content">
                <p>
                    {{ $Article->description }}
                </p>
                <div class="read-more">

                    <a href="{{ route('oneArticle', $Article->id) }}" target="_blank">
                        Read More
                    </a>
                    @auth
                        <a href="{{ route('Articles.delete', $Article->id) }}" style="background-color: rgb(224, 0, 0)">
                            Remove
                        </a>
                        <a href="{{ route('Articles.edit', $Article->id) }}" style="background-color: rgb(0, 202, 40)">
                            Update
                        </a>
                    @endauth
                    <a href="#" style="background-color: rgb(98, 0, 202)">Sher</a>

                </div>
            </div>

        </article>
    @endforeach
    <div class="row " style="height: 100px">
        <div class="col-lg-12 d-flex justify-content-center">
            {{ $Articles->links() }}
        </div>
    </div>


    {{-- <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div> --}}
@endsection
@section('sort')
    @foreach ($Sections as $Section)
        <li><a href="{{ route('article.sort', $Section->id) }}">{{ $Section->title }} <span></span></a></li>
    @endforeach
@endsection

@section('post-side')
    @foreach ($randoms as $random)
        <div class="post-item clearfix">
            <img src="{{ asset('images/articles/' . $random->photo) }}" alt="">
            <h4><a href="{{ $random->url }}">{{ $random->title }}</a></h4>
            <time datetime="2020-01-01">{{ $random->created_at->toDayDateTimeString() }}</time>
        </div>
    @endforeach
@endsection

@endsection
@section('js')
<script src="{{ asset('js/app.js') }}" defer></script>

@endsection
