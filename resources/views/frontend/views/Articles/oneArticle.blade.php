@extends('frontend.layouts.master2')
@section('title' ,$Articles->title)
@section('css')
@section('content')

    @section('article')
        {{-- @foreach ($Articles as $Article) --}}
            <article class="entry">

                <div class="entry-img">
                    <img src={{ asset('images/articles/' . $Articles->photo) }} alt="" class="img-fluid">
                </div>

                <h2 class="entry-title">
                    <a href="{{ route('oneArticle',$Articles->id) }}" target="_blank">{{ $Articles->title }}</a>
                </h2>

                <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                            <a href="blog-single.html">
                                {{-- {{ Auth::user()->name }} --}}
                            </a>
                        </li>

                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time
                                    datetime="2020-01-01">{{ $Articles->created_at->toDayDateTimeString()  }}</time></a></li>

                        {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i>
                            <a href="blog-single.html">12
                                Comments</a></li> --}}
                    </ul>
                </div>

                <div class="entry-content">
                    <p>
                    {{ $Articles->description }}
                    </p>
                    <p style="word-wrap: break-word">
                        {{ $Articles->article }}
                      </p>

                      <p>
                        Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel
                        aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                      </p>

                      <blockquote>
                        <p>
                          Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam
                          doloribus minus autem quos.
                        </p>
                      </blockquote>

                      <p>
                        Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident
                        voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit
                        perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                        Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum.
                        Omnis dolorum exercitationem harum qui qui blanditiis neque.
                        Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel
                        magnam quod et tempora deleniti error rerum nihil tempora.
                      </p>

                      <h3>Et quae iure vel ut odit alias.</h3>
                      <p>
                        Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio
                        provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam
                        quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                        Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione
                        aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores
                        natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                        Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam
                        voluptatem voluptatem accusamus mollitia aut atque aut.
                      </p>
                      <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                      <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                      <p>
                        Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae
                        a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint
                        non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                        Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex
                        libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                      </p>
                      <p>
                        Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla
                        sit eaque mollitia nisi asperiores est veniam.
                      </p>

                </div>

            </article>
        {{-- @endforeach --}}
    @endsection

    @section('sort')
        @foreach ($xxx as $xx)
        <li>
            <a href="{{ route('article.sort' ,$xx->id ) }}" >
            {{ $xx->title }} <span></span>
            </a>
        </li>
        @endforeach
    @endsection
    @section('post-side')
        @foreach ($randoms as $random)
        <div class="post-item clearfix">
            <img src="{{ asset('images/articles/' . $random->photo) }}" alt="">
            <h4><a href="{{ $random->url  }}">{{ $random->title }}</a></h4>
            <time datetime="2020-01-01">{{ $random->created_at->toDayDateTimeString()  }}</time>
        </div>
        @endforeach
    @endsection

@endsection
@section('js')

@endsection
