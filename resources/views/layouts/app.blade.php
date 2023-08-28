<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/bootstrap-icons/bootstrap-icons.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/aos/aos.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/glightbox/css/glightbox.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/vendor/swiper/swiper-bundle.min.css' }}" rel="stylesheet">
    <link href="{{ 'assets_skpd/css/main.css' }}" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
          background-color: #008374;
        }
      </style>
</head>
<body>
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">abcdefg@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>DISKOMINFO</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <div class="logo d-flex align-items-center">
                <h1 style="font-size: 36px; font-weight: normal;">LAYANAN<span style="font-size: 68px; font-weight: bold;">TIK</span></h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @else
                    <li href="{{ route('logout') }}"
                            onclick="event.preventDefault();
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
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <div class="hero">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
