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
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-success dropdown-toggle me-1" type="button"
                                                id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Petugas
                                            </button>
                                            @foreach ($petugasUsers as $petugas)
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                                <a class="dropdown-item" href="#">{{ $petugas->nama }}</a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-info dropdown-toggle me-1" type="button"
                                                id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Status
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                                <a class="dropdown-item status-item" href="#" data-status="ACC">Diterima</a>
                                                <a class="dropdown-item status-item" href="#" data-status="DITOLAK">Ditolak</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-danger dropdown-toggle me-1" type="button"
                                                id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                                <a class="dropdown-item" href="#">Diproses</a>
                                                <a class="dropdown-item" href="#">Selesai</a>
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
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownItems = document.querySelectorAll('.status-item');
        const konfirmasiModal = new bootstrap.Modal(document.getElementById('konfirmasiModal'));
        const konfirmasiButton = document.getElementById('konfirmasiButton');
        let selectedStatus = '';

        dropdownItems.forEach(item => {
            item.addEventListener('click', function (event) {
                event.preventDefault();
                selectedStatus = item.getAttribute('data-status');
                konfirmasiModal.show();
            });
        });

        konfirmasiButton.addEventListener('click', function () {
            if (selectedStatus !== '') {
                axios.post('/simpan-status', {
                    status: selectedStatus
                })
                .then(response => {
                    konfirmasiModal.hide();
                    selectedStatus = '';
                })
                .catch(error => {
                    console.error(error);
                });
            }
        });
    });
</script>

@endsection
