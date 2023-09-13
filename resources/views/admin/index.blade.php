@extends('layouts.admin_pages')

@section('content')
<div class="page-heading">
    <h3>Dashboard</h3>
    <li class="sidebar-item">
        <div class="d-flex align-items-center">
            <span class="sidebar-link">Dark</span>
            <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                        opacity=".3"></path>
                    <g transform="translate(-210 -1)">
                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                        <circle cx="220.5" cy="11.5" r="4"></circle>
                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                        </path>
                    </g>
                </g>
                </svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input me-0" type="checkbox" id="toggle-dark" />
                    <label class="form-check-label"></label>
                </div>
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
                        <div class="card-body px-4 py-3-4">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-bold bi-stack-overflow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">
                                        Layanan Masuk
                                    </h6>
                                    <h6 class="font-extrabold mb-0">(3)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-3-4">
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
                        <div class="card-body px-4 py-3-4">
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
                        <div class="card-body px-4 py-3-4">
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
                                    <!-- table with dark -->
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
@endsection
