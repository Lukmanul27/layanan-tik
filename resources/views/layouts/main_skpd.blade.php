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
                        href="mailto:contact@example.com">abcdefg@gmail.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>DISKOMINFO</span></i>
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
                <h1 style="font-size: 36px; font-weight: normal;">LAYANAN<span
                        style="font-size: 68px; font-weight: bold;">TIK</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#tutorial">Tutorial</a></li>
                    <li><a href="#pelayanan">Pelayanan</a></li>
                    <li><a href="#lacak">Pengajuan</a></li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
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
    <section id="dashboard" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Selamat Datang di <span>Pelayanan TIK</span></h2>
                    <p>Pelayanan Teknologi Informasi dan Telekomunikasi (Tik) merujuk pada serangkaian layanan yang
                        berfokus pada penyediaan solusi teknologi informasi dan jaringan komunikasi untuk memenuhi
                        kebutuhan organisasi, individu, atau pelanggan. Layanan ini mencakup berbagai aspek teknologi
                        dan komunikasi yang mendukung operasi, efisiensi, inovasi, dan konektivitas.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ 'assets_skpd/img/hero-img.svg' }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Mudah</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Cepat</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Simpel</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Hemat</a></h4>
                        </div>
                    </div>
                    <!--End Icon Box -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>About</h2>
                    <p>Pelayanan Teknologi Informasi dan Telekomunikasi (Tik) sangat penting dalam dunia modern yang
                        didorong oleh teknologi. Ini membantu organisasi dan individu menghadapi tantangan teknologi,
                        memaksimalkan potensi teknologi, dan menjaga konektivitas yang kuat dalam era digital.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>Tentang Teknologi</h3>
                        <img src="assets_skpd/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p>Teknologi merujuk pada penerapan pengetahuan ilmiah dan keterampilan praktis untuk
                            menciptakan, merancang, mengembangkan, dan menggunakan alat, mesin, perangkat lunak, sistem,
                            serta berbagai proses yang bertujuan untuk memecahkan masalah, memenuhi kebutuhan, atau
                            mencapai tujuan tertentu dalam berbagai bidang kehidupan. Teknologi memainkan peran yang
                            sangat penting dalam perkembangan manusia dan masyarakat modern, mengubah cara kita bekerja,
                            berkomunikasi, belajar, berinteraksi, dan bahkan memandang dunia.</p>
                        <p>Namun, dalam perkembangan teknologi, munculnya ancaman siber menjadi isu yang mendesak.
                            Keamanan data, perlindungan informasi pribadi, dan keamanan infrastruktur menjadi fokus
                            utama organisasi yang beroperasi secara digital. Upaya yang tepat diperlukan untuk
                            melindungi sistem dan data dari serangan siber yang dapat merusak reputasi dan stabilitas.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">Di samping itu, transformasi teknologi juga dapat memiliki dampak pada
                                lapangan pekerjaan tradisional. Automatisasi dan otomatisasi proses bisnis dapat
                                menggantikan beberapa pekerjaan yang lebih rutin. Oleh karena itu, penting untuk
                                berinvestasi dalam pelatihan dan pengembangan keterampilan yang relevan untuk menghadapi
                                perubahan ini.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>Evolusi dan Inovasi</li>
                                <li><i class="bi bi-check-circle-fill"></i>Peningkatan Efisiensi</li>
                                <li><i class="bi bi-check-circle-fill"></i>Konektivitas Global</li>
                            </ul>
                            <p>
                                Salah satu aspek positif lainnya adalah bagaimana teknologi dapat digunakan untuk
                                mencari solusi dalam isu lingkungan dan keberlanjutan. Teknologi ramah lingkungan,
                                seperti penggunaan energi terbarukan dan metode pengelolaan limbah yang inovatif,
                                berperan dalam mengurangi dampak lingkungan dan membantu menjaga keberlanjutan planet
                                kita.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets_skpd/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                                <a href="https://youtu.be/sOSET6uJgJY?si=Pb1YBd7XgCpu8CG5"
                                    class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="tutorial" class="tutorial sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Cara Mengajukan Layanan</h2>
                    <p>Berikut merupakan cara dalam mengajukan sebuah layanan TIK</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-1-circle-fill"></i>
                                </div>
                                <h3>Pertama</h3>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque
                                    eum hic non ut nesciunt dolorem.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-2-circle-fill"></i>
                                </div>
                                <h3>Kedua</h3>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque
                                    eum hic non ut nesciunt dolorem.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-3-circle-fill"></i>
                                </div>
                                <h3>Ketiga</h3>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque
                                    eum hic non ut nesciunt dolorem.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-4-circle-fill"></i>
                                </div>
                                <h3>Keempat</h3>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque
                                    eum hic non ut nesciunt dolorem.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item position-relative">
                                <div class="icon">
                                    <i class="bi bi-5-circle-fill"></i>
                                </div>
                                <h3>Kelima</h3>
                                <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque
                                    eum hic non ut nesciunt dolorem.</p>
                            </div>
                        </div>

                    </div>
                    <!-- End Portfolio Container -->
                </div>

            </div>
        </section><!-- End Portfolio Section -->



        <main class="py-4">
            @yield('content')
        </main>

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span>Impact</span>.
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex mt-4">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Product Management</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                </div>
            </div>

            <div class="container mt-4">
                <div class="copyright">
                    &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>

        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ 'assets_skpd/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
        <script src="{{ 'assets_skpd/vendor/aos/aos.js' }}"></script>
        <script src="{{ 'assets_skpd/vendor/glightbox/js/glightbox.min.js' }}"></script>
        <script src="{{ 'assets_skpd/vendor/purecounter/purecounter_vanilla.js' }}"></script>
        <script src="{{ 'assets_skpd/vendor/swiper/swiper-bundle.min.js' }}"></script>
        <script src="{{ 'assets_skpd/vendor/isotope-layout/isotope.pkgd.min.js' }}"></script>
        <script src="{{ 'assets_skpd/vendor/php-email-form/validate.js' }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ 'assets_skpd/js/main.js' }}"></script>

</body>

</html>
