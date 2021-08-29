@extends('frontend.layouts.master2')
@section('title' , $Articles->title)
@section('css')
    <link href={{ asset('assets/img/favicon.png') }} rel="icon">
    <link href={{ asset('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/remixicon/remixicon.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
@endsection
@section('content')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        </div>
    </header><!-- End Header -->

    <main id="main" class="mt-5">
        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ asset('images/articles/' . $Articles->photo) }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="#">{{ $Articles->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">{{ Auth::user()->name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                        <a href="blog-single.html"><time datetime="2020-01-01">{{ $Articles->created_at }}</a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ $Articles->description }}
                                </p>

                                <p>
                                    Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in
                                    accusamus harum vel
                                    aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                                </p>

                                <blockquote>
                                    <p>
                                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut
                                        eos aliquam
                                        doloribus minus autem quos.
                                    </p>
                                </blockquote>

                                <p>
                                    {{ $Articles->article }}
                                </p>

                                <h3>Et quae iure vel ut odit alias.</h3>
                                <p>
                                    Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum
                                    atque. Optio
                                    provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis
                                    ullam
                                    quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                                    Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut
                                    ratione
                                    aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis
                                    asperiores
                                    natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur
                                    quidem ea.
                                    Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum
                                    quibusdam
                                    voluptatem voluptatem accusamus mollitia aut atque aut.
                                </p>
                                <img src={{ asset("assets/img/blog/blog-inside-post.jpg" ) }}class="img-fluid" alt="">

                                <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                                <p>
                                    Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In
                                    assumenda quia quae
                                    a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed
                                    excepturi sint
                                    non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                                    Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
                                    quibusdam esse. Ex
                                    libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam
                                    vitae.
                                </p>
                                <p>
                                    Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
                                    incidunt. Nulla
                                    sit eaque mollitia nisi asperiores est veniam.
                                </p>

                            </div>

                            <div class="entry-footer">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div>

                        </article>

                        <!-- End blog entry -->

                        <div class="blog-author d-flex align-items-center">
                            <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
                            <div>
                                <h4>{{ Auth::user()->name }}</h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium.
                                    Quas repellat
                                    voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde
                                    voluptas.
                                </p>
                            </div>
                        </div>
                        <!-- End blog author bio -->

                    </div>
                    <!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                    <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                    <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                    <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                    <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                    <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <time datetime="2020-01-01">Jan 1, 2020</time>
                                </div>

                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title">Tags</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}></script>
    <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
    <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>
    <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
    <script src={{ asset('assets/vendor/purecounter/purecounter.js') }}></script>
    <script src={{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset('assets/js/main.js') }}></script>
@endsection