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
                    <li><a class="nav-link scrollto " href="{{ route('showCourses') }}">الكورسات التعليمة</a></li>
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
    <!-- .navbar -->
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
