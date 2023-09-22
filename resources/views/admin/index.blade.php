@extends('layouts.admin_pages')

@section('content')
<div class="page-heading">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4>Dashboard</h4>
        <li class="card">
            <div class="card-body px-4 py-3">
                <div class="d-flex align-items-center flex-column">
                    <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                        data-bs-target="#notifikasi">
                        <i class="bi bi-bell-fill"></i>
                    </button>
                </div>
            </div>
        </li>
    </div>

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-3">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-bold bi-stack-overflow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">
                                            Permintaan
                                        </h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalPermintaan }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-3">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">User</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalUsers }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-3">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-bold bi-suit-club"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Role Akun</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalRole }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-3">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-bold bi-send-check-fill"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pelayanan</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalLayanan }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <section class="section">
                        <div class="row" id="table-inverse">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>List Akun Terdaftar</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <div class="scrollable-content">
                                                <table class="table">
                                                    <thead>
                                                        <th></th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($akun as $item)
                                                        <td>{{$loop->iteration}}.</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->email}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
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
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="card-header">
                            <h4 class="mb-0">Role User</h4>
                        </div>
                        <div class="card-content pb-4">
                            @foreach ($role as $item)
                            <div class="recent-message d-flex px-4 py-3 align-items-center">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="name ms-4">
                                    <h6 class="text-muted mb-0">{{$item->name}}</h6>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

<div class="modal fade" id="notifikasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Notifikasi
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Ada Layanan Baru</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
        </div>
    </div>
</div>
