@extends('layouts.admin_pages')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h1 class="h3 mb-0 text-gray-800">List Pengajuan Masuk</h1>
                <p class="text-subtitle text-muted">Berikut List Permintaan Masuk</p>
            </div>
        </div>
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <table class="table" id="table">
                            <thead>
                                <th></th>
                                <th>Nama</th>
                                <th>Nama Layanan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Detail</th>
                            </thead>
                            <tbody>
                                @foreach ($pengajuan->sortByDesc('created_at') as $data)
                                    @if ($data->status == 'Pengajuan')
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>
                                                {{ \App\Models\User::find($data->user_id)->name }}
                                            </td>
                                            <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                                            <td>{{ $data->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button"
                                                        class="btn btn-outline-primary rounded-pill btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#modal-{{ $data->id }}">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                </div>
                                            </td>
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
    <hr>
    {{-- Diterima --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h1 class="h3 mb-0 text-gray-800">List Pengajuan Diterima</h1>
                <p class="text-subtitle text-muted">Berikut List Permintaan Diterima</p>
            </div>
        </div>
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <table class="table" id="table">
                            <thead>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Nama Layanan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Nama Petugas</th>
                                <th>Petugas</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($pengajuan->where('status', 'Diterima')->sortByDesc('created_at') as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>
                                            {{ \App\Models\User::find($data->user_id)->name }}
                                        </td>
                                        <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                                        <td>{{ $data->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>
                                            @if (!empty($data->petugas_data))
                                                {{ json_decode($data->petugas_data)->name }}
                                            @else
                                                Belum Ada Petugas Dipilih
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-outline-primary rounded-pill btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#petugas-{{ $data->id }}">
                                                    Pilih Petugas
                                                </button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-outline-primary rounded-pill btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#modal-{{ $data->id }}">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    {{-- Ditolak --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h1 class="h3 mb-0 text-gray-800">List Pengajuan Ditolak</h1>
                <p class="text-subtitle text-muted">Berikut List Permintaan Ditolak</p>
            </div>
        </div>
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <table class="table" id="table">
                            <thead>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Nama Layanan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($pengajuan->where('status', 'Ditolak')->sortByDesc('created_at') as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}.</td>
                                        <td>{{ \App\Models\User::find($data->user_id)->name }}</td>
                                        <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                                        <td>{{ $data->created_at->format('d-m-Y') }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-outline-primary rounded-pill btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#modal-{{ $data->id }}">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($pengajuan->sortByDesc('created_at') as $data)
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="modal fade" id="modal-{{ $data->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                        role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Detail Pelayanan
                                    {{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i data-feather="x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">
                                    {{ \App\Models\User::find($data->user_id)->name }} <br>
                                    <u>
                                        Layanan {{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}
                                    </u><br />
                                    <small>
                                        Tanggal {{ $data->created_at->format('d-m-Y') }}
                                    </small>
                                </p>
                                <hr>
                                <div>
                                    <ul>
                                        @foreach (json_decode($data->data, true) as $key => $inputan)
                                            @if (is_string($inputan))
                                                @if ($loop->iteration > 1)
                                                    <li>{{ $inputan }}</li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>

                                <hr>
                                {{-- <p>Berikut Merupakan Lampiran Dari {{ \App\Models\User::find($data->user_id)->name }}</p>
                        <p> --}}
                                Nama File: {{ basename($data->file_path) }}
                                <a class="btn btn-outline-primary rounded-pill btn-sm"
                                    href="{{ Storage::url('uploads/' . basename($data->file_path)) }}"
                                    target="_blank">Lihat File</a>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <div class="btn-group" role="group">
                                    <form action="{{ route('approve', $data->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-success rounded-pill btn-sm"><i
                                                class="bi bi-check2-circle"></i> Terima</button>
                                    </form>
                                    <form action="{{ route('disapprove', $data->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger rounded-pill btn-sm"><i
                                                class="bi bi-x-circle"></i> Tolak</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach ($pengajuan->sortByDesc('created_at') as $data)
        <div class="modal fade" id="petugas-{{ $data->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Pilih Petugas Untuk Pelayanan
                            {{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('pengajuan.store', ['id' => $data->id]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="petugas_id">Pilih Petugas:</label>
                                <select class="form-control" id="petugas_id" name="petugas_id">
                                    <option value="">Pilih Petugas</option>
                                    @foreach ($petugasUsers as $petugas)
                                        <option value="{{ $petugas->id }}">{{ $petugas->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tunjuk Petugas</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="resetModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="resetModalLabel">Reset Submissions</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to reset all submissions? This action cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal"
                            aria-label="Close">Cancel
                        </button>
                        <form action="{{ route('resetSubmissions') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Reset Submissions</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
        <script>
            $('#table').dataTable();
        </script>
    @endsection
