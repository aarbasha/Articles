<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.css')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo  d-flex align-items-center">
                <img src={{ asset('assets/img/hero-img.png') }} class="" alt="">
                <span>Ahmad Networking</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="/">الرئيسية</a></li>
                    <li><a class="nav-link scrollto " href="{{ route('showArticles') }}">مقالات</a></li>
                    <li><a class="nav-link scrollto " href="{{ route('showCourses') }}">الدورات التعليمة</a></li>

                    @guest
                        {{-- <li class="nav-item">
                        <a class="nav-link scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li> --}}
                        @if (Route::has('register'))
                            {{-- <li class="nav-item">
                            <a class="nav-link scrollto" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> --}}
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link scrollto dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="{{ route('ahmad') }}">
                                    {{ __('dashboard') }}
                                </a>
                                <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        Blog
                    </li>
                </ol>
                <h2>
                    Blog
                </h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                      @yield('article')


                        <!-- End blog entry -->
                    </div>
                    <!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar" >

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories ">
                                <ul>
                                   @yield('sort')
                                </ul>
                            </div>
                            <!-- End sidebar categories-->

                            <h3 class="sidebar-title">Proposals</h3>
                            <div class="sidebar-item recent-posts">
                             @yield('post-side')


                            </div>
                            <!-- End sidebar recent posts-->

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

                        </div>

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section>
        <!-- End Blog Section -->

    </main>


    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('content')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.layouts.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

   @include('frontend.layouts.js')

</body>

</html>
