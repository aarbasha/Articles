<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src={{ asset('admin/dist/img/hero-img.png') }} alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ahmad Networking</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{ asset('admin/dist/img/user2-160x160.jpg') }} class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth::user()->name }}</a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/ahmad" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            الرئيسية
                        </p>
                    </a>
                </li>
                {{-- المقالات --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            المقالات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Sections.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الاقســـام </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Articles.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول المقالات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Articles.grid') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض المقالات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- نهاية المقالات --}}

                {{-- الكورسات --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            الكورسات
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Platforms.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>المنصات التعليمية</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Courses.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>جدول الكورسات</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Courses.grid') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>عرض الكورسات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- نهاية الكورسات --}}

                {{-- Articals --}}

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            اعدادات بروفايل المدير
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('mail.box') }}" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            الصندوق الوارد
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            اعدادات الموقع الخارجي
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
