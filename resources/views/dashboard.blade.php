@extends('layouts.main')

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
                                <a href="{{ route('login') }}" class="readmore stretched-link">Ajukan <i
                                    class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
