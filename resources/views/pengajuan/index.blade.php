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
                            <tr>
                                <td>1</td>
                                <td>Nama SKPD</td>
                                <td>Jenis Layanan</td>
                                <td>Tanggal Pengajuan</td>
                                <td>
                                    <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      List Petugas
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">A</a>
                                      <a class="dropdown-item" href="#">B</a>
                                      <a class="dropdown-item" href="#">C</a>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Status
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#">Selesai</a>
                                          <a class="dropdown-item" href="#">Diproses</a>
                                        </div>
                                      </div>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Aksi
                                        </button>
                                        <div class="dropdown-menu">
                                          <a class="dropdown-item" href="#">ACC</a>
                                          <a class="dropdown-item" href="#">Tolak</a>
                                        </div>
                                      </div>
                                </td>
                            </tr>
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
