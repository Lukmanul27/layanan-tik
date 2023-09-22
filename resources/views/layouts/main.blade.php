<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Layanan TIK | DISKOMINFO</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ 'assets_skpd/img/favicon.png' }}" rel="icon">
    <link href="{{ 'assets_skpd/img/apple-touch-icon.png' }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ 'assets_skpd/vendor/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/bootstrap-icons/bootstrap-icons.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/aos/aos.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/glightbox/css/glightbox.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/swiper/swiper-bundle.min.css' }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ 'assets_skpd/css/main.css' }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">diskominfo@garutkab.go.id</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 262 4895000</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets_skpd/img/logo.png" alt=""> -->
                <h1 style="font-size: 36px; font-weight: normal;">PE<span
                        style="font-size: 68px; font-weight: bold;">TIK</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#tutorial">Tutorial</a></li>
                    <li><a href="#pelayanan">Pelayanan</a></li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </nav><!-- .navbar -->
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('partials.dbh')

    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        @include('partials.about')

        <main class="py-4">
            @yield('content')
        </main>

        @include('partials.footer')
    @stack('script')

</body>

</html>
