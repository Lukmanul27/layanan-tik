@extends('layouts.admin_pages')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List Pengajuan Masuk</h1>
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
                            <th>Petugas</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach($pengajuan->sortByDesc('updated_at') as $data)
                            <tr>
                                <td>{{$loop->iteration}}.</td>
                                <td>
                                    {{ \App\Models\User::find($data->user_id)->name }}
                                </td>
                                <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                                <td>{{ $data->updated_at->format('Y-m-d') }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-info dropdown-toggle me-1" type="button"
                                            id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span id="selectedPetugas">Petugas</span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                            @foreach ($petugasUsers as $petugas)
                                                <a class="dropdown-item petugas-item" href="#" data-petugas="{{ $petugas->name }}">{{ $petugas->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-success dropdown-toggle me-1" type="button"
                                                id="dropdownMenuStatus" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span id="selectedStatus">Status</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuStatus">
                                                @foreach ($stat as $status)
                                                <a class="dropdown-item status-item" href="#" data-status="{{ $status->nama }}">{{ $status->nama }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-danger dropdown-toggle me-1" type="button"
                                                id="dropdownMenuAksi" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span id="selectedAksi">Aksi</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuAksi">
                                                @foreach ($paksi as $pilaksi)
                                                <a class="dropdown-item aksi-item" href="#" data-aksi="{{ $pilaksi->nama_aksi }}">{{ $pilaksi->nama_aksi }}</a>
                                                @endforeach
                                            </div>
                                        </div>
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

<div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="konfirmasiButton">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#table').dataTable()
</script>
<script>
    // Menangani peristiwa saat item petugas dipilih
    var petugasItem = document.querySelectorAll('.petugas-item');
    petugasItem.forEach(function(item) {
        item.addEventListener('click', function() {
            var selectedPetugas = item.getAttribute('data-petugas');
            document.getElementById('selectedPetugas').textContent = selectedPetugas;
        });
    });

    // Menangani peristiwa saat item status dipilih
    var statusItems = document.querySelectorAll('.status-item');
    statusItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var selectedStatus = item.getAttribute('data-status');
            document.getElementById('selectedStatus').textContent = selectedStatus;
        });
    });

    // Menangani peristiwa saat item aksi dipilih
    var aksiItems = document.querySelectorAll('.aksi-item');
    aksiItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var selectedAksi = item.getAttribute('data-aksi');
            document.getElementById('selectedAksi').textContent = selectedAksi;
        });
    });
</script>
@endsection
