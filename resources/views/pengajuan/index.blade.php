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
                            @foreach($pengajuan as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $data->user_id }}</td>
                                <td>{{ $data->pelayanan_id }}</td>
                                <td>{{ $data->updated_at }}</td>
                                <td>
                                    <div class="btn-group dropdown me-1 mb-1">
                                        <button type="button" class="btn btn-success">Petugas</button>
                                        <button type="button"
                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            data-reference="parent">
                                            <span class="sr-only">Petugas</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group dropdown me-1 mb-1">
                                        <button type="button" class="btn btn-secondary">Status</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            data-reference="parent">
                                            <span class="sr-only">Status</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Selesai</a>
                                            <a class="dropdown-item" href="#">Proses</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group dropdown me-1 mb-1">
                                        <button type="button" class="btn btn-info">Aksi</button>
                                        <button type="button"
                                            class="btn btn-outline-info dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            data-reference="parent">
                                            <span class="sr-only">Status</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Terima</a>
                                            <a class="dropdown-item" href="#">Tolak</a>
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#table').dataTable()

</script>


@endsection
