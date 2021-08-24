<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.css')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('frontend.layouts.navbar')
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
