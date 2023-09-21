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
                    <div class="card-body" data-aos="fade-down">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="icon">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <h3>{{ $item->nama }}</h3>
                                <p>{{ $item->deskripsi }}</p>
                                <a href="{{ route('pengajuan_in.show',$item->id)}}" class="badge bg-warning">Ajukan <i
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

<section id="lacak" class="lacak sections-bg">
    <div class="container text-center" data-aos="fade-up">
        <h2>Progres Pengajuan</h2>
        <p>Berikut Merupakan Pengajuan Layanan Anda</p>
    </div>
    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <table class="table" data-aos="fade-down">
                <thead>
                    <th></th>
                    <th>Nama Layanan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Proses</th>
                </thead>
                <tbody>
                    @foreach($pengajuan->sortByDesc('updated_at') as $data)
                    <tr>
                        <td>1</td>
                        <td>Nama</td>
                        <td>{{ $data->updated_at->format('Y-m-d') }}</td>
                        <td>status</td>
                        <td>Proses</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
