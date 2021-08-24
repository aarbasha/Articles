<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo  d-flex align-items-center">
            <img src={{ asset('assets/img/hero-img.png') }} class="" alt="">
            <span>Ahmad Networking</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/">الرئيسية</a></li>
                <li><a class="nav-link scrollto" href="#about">من أنا</a></li>
                <li><a class="nav-link scrollto" href="#services">الخدمات</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">اعمالي</a></li>
                <li><a class="nav-link scrollto" href="#team">فريقي</a></li>
                <li class="dropdown"><a href="#"><span>مقالات</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('Articles_software') }}">برمجيات</a></li>
                        <li><a href="#">شبكات</a></li>
                        <li><a href="#">تكنولوجيا</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>كورسات</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">يوتيوب</a></li>
                        <li><a href="#">يوديمي</a></li>
                        <li><a href="#">كورسيرا</a></li>
                        <li><a href="#">يوداسيتي</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">تواصل معي</a></li>
                {{-- <li><a class="getstarted scrollto" href="/ahmad">ahmad</a></li> --}}
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
