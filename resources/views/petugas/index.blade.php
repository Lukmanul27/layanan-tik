@extends('layouts.petugas_pages')

@section('content')
<div class="page-heading">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4>Dashboard</h4>
        <li class="card">
            <div class="card-body px-4 py-3">
                <div class="d-flex align-items-center flex-column">
                    <span class="sidebar-link">Dark</span>
                    <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                        <div class="form-check form-switch fs-6">
                            <input class="form-check-input me-0" type="checkbox" id="toggle-dark" />
                            <label class="form-check-label"></label>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-bold bi-box-arrow-in-down"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-12 col-xl-12 col-xxl-5">
                                        <h6 class="text font-semibold">Permintaan Layanan
                                            <span class="font-extrabold mb-0">
                                                {{ $totalLayanan }}
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-3">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-bold bi-send-check-fill"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-lg-12 col-xl-12 col-xxl-5">
                                        <h6 class="text font-semibold">Layanan Tersedia
                                            <span class="font-extrabold mb-0">
                                                {{ $totalLayanan }}
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <section class="section">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>List Pelayanan Masuk</h4>
                                </div>
                                <div class="card-content">
                                    <!-- table with dark -->
                                    <div class="table-responsive">
                                        <div class="scrollable-content">
                                            <table class="table">
                                                <thead>
                                                    <th></th>
                                                    <th>Nama</th>
                                                    <th>Jenis Layanan</th>
                                                    <th>Tanggal</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($pengajuan->sortByDesc('updated_at') as $data)
                                                    @if($data->status == 'diterima')
                                                    <tr>
                                                        <td>{{$loop->iteration}}.</td>
                                                        <td>
                                                            {{ \App\Models\User::find($data->user_id)->name }}
                                                        </td>
                                                        <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}
                                                        </td>
                                                        <td>{{ $data->updated_at->format('Y-m-d') }}</td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="stats-icon red mb-2">
                                <i class="iconly-bold bi-stack-overflow"></i>
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">Daftar Pelayanan</h5>
                            </div>
                        </div>
                        <hr />
                        @foreach ($pelayanan as $item)
                        <p class="font-semibold ms-3 mb-0">{{$loop->iteration}}. {{$item->nama}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
