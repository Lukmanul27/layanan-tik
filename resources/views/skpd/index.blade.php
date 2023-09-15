@extends('layouts.main_skpd')

@section('content')

<section id="pelayanan" class="service">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Daftar Pelayanan</h2>
            <p>Berikut Merupakan Daftar Layanan yang Tersedia</p>
        </div>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
            @foreach ($pelayanan as $item)
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="icon">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <h3>{{ $item->nama }}</h3>
                                <p>{{ $item->deskripsi }}</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="badge bg-success" data-bs-toggle="modal"
                                    data-bs-target="#ajukanModal">
                                    Ajukan
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                                {{-- <a href="{{ route('ajukan.index', ['layanan_id' => $item->id]) }}"
                                    class="readmore stretched-link">Ajukan <i class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="lacak" class="hero">
    <div class="container position-relative">
        <h2 class="text-center">Lihat Proses Pengajuan Layanan</h2>
    </div>
    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5 justify-content-center">
                <!-- Tambahkan class justify-content-center di sini -->
                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-box-arrow-up-right"></i></div>
                        <h4 class="title"><a href="pengajuan" class="stretched-link">Layanan Yang Diajukan</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->
            </div>
        </div>
    </div>
</section>
</main><!-- End #main -->

<!-- Modal -->
@foreach ($pelayanan as $item)
<div class="modal fade" id="ajukanModal" tabindex="-1" aria-labelledby="ajukanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ajukanModalLabel">Pelayanan {{$item->nama}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $item->form }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
