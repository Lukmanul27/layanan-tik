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
    @include('partials.navbar')

    @include('partials.dbh')
    <main id="main">
    @include('partials.about')

    <main class="py-4">
        @yield('content')
    </main>

    @include('partials.footer')
    @stack('script')
</body>

</html>
