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
                            <th>Status</th>
                            <th>Aksi</th>
                            <th></th>
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
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-success dropdown-toggle me-1 rounded-pill btn-sm"
                                                type="button" id="dropdownMenuStatus" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span id="selectedStatus">Status</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuStatus">
                                                @foreach ($stat as $status)
                                                <a class="dropdown-item status-item" href="#"
                                                    data-status="{{ $status->nama }}">{{ $status->nama }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-danger dropdown-toggle me-1 rounded-pill btn-sm"
                                                type="button" id="dropdownMenuAksi" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span id="selectedAksi">Aksi</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuAksi">
                                                @foreach ($paksi as $pilaksi)
                                                <a class="dropdown-item aksi-item" href="#"
                                                    data-aksi="{{ $pilaksi->nama_aksi }}">{{ $pilaksi->nama_aksi }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-outline-info rounded-pill btn-sm"
                                            style="margin-right: 5px;">
                                            Detail
                                        </button>
                                        <button class="btn btn-outline-success rounded-pill btn-sm">
                                            Konfirmasi
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#table').dataTable()

    var statusItems = document.querySelectorAll('.status-item');
    statusItems.forEach(function (item) {
        item.addEventListener('click', function () {
            var selectedStatus = item.getAttribute('data-status');
            document.getElementById('selectedStatus').textContent = selectedStatus;
        });
    });

    var aksiItems = document.querySelectorAll('.aksi-item');
    aksiItems.forEach(function (item) {
        item.addEventListener('click', function () {
            var selectedAksi = item.getAttribute('data-aksi');
            document.getElementById('selectedAksi').textContent = selectedAksi;
        });
    });

</script>
@endsection
