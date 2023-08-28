@extends('layouts.main_skpd')

@section('content')

    <!-- ======= Our Services Section ======= -->
    <section id="pelayanan" class="service">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Daftar Pelayanan</h2>
            <p>Berikut Merupakan Daftar Layanan yang Tersedia</p>
          </div>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-4 col-md-6">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="bi bi-arrow-down-left-square"></i>
                </div>
                <h3>//Database Layanan</h3>
                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                <a href="#" class="readmore stretched-link">Ajukan <i class="bi bi-arrow-right"></i></a>
              </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="bi bi-arrow-down-left-square"></i>
                  </div>
                  <h3>//Database Layanan</h3>
                  <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                  <a href="#" class="readmore stretched-link">Ajukan <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="bi bi-arrow-down-left-square"></i>
                  </div>
                  <h3>//Database Layanan</h3>
                  <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                  <a href="#" class="readmore stretched-link">Ajukan <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->

              <div class="col-lg-4 col-md-6">
                <div class="service-item  position-relative">
                  <div class="icon">
                    <i class="bi bi-arrow-down-left-square"></i>
                  </div>
                  <h3>//Database Layanan</h3>
                  <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                  <a href="#" class="readmore stretched-link">Ajukan <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->

          </div>

        </div>
      </section><!-- End Our Services Section -->

      <section id="lacak" class="hero">
        <div class="container position-relative">
            <h2 class="text-center">Lihat Proses Pengajuan Layanan</h2>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
              <div class="row gy-4 mt-5 justify-content-center"> <!-- Tambahkan class justify-content-center di sini -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-box-arrow-up-right"></i></div>
                    <h4 class="title"><a href="pengajuan" class="stretched-link">Layanan Yang Diajukan</a></h4>
                  </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box">
                    <div class="icon"><i class="bi bi-recycle"></i></div>
                    <h4 class="title"><a href="" class="stretched-link">Layanan Diproses</a></h4>
                  </div>
                </div><!--End Icon Box -->

              </div>
            </div>
          </div>
      </section>

  </main><!-- End #main -->

  @endsection
