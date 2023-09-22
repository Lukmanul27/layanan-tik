@extends('layouts.petugas_pages')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">List {{ $title }}</h1>
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
                            <th>Progres</th>
                        </thead>
                        <tbody>
                            @foreach($pengajuan->sortByDesc('updated_at') as $data)
                            @if($data->status == 'diterima')
                            <tr>
                                <td>{{$loop->iteration}}.</td>
                                <td>
                                    {{ \App\Models\User::find($data->user_id)->name }}
                                </td>
                                <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                                <td>{{ $data->updated_at->format('Y-m-d') }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <form action="#"
                                        method="POST">
                                        <input type="hidden" name="process_status" value="dalam_antrian">
                                        <button type="submit" class="btn btn-outline-info rounded-pill btn-sm">
                                            <i class="bi bi-check2-circle"></i> Dalam Antrian
                                        </button>
                                    </form>

                                    <form action="#"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="process_status" value="diproses">
                                        <button type="submit" class="btn btn-outline-danger rounded-pill btn-sm">
                                            <i class="bi bi-x-circle"></i> Diproses
                                        </button>
                                    </form>

                                    <form action="#"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="process_status" value="selesai">
                                        <button type="submit" class="btn btn-outline-success rounded-pill btn-sm">
                                            <i class="bi bi-check2-all"></i> Selesai
                                        </button>
                                    </form>

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

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#table').dataTable()

</script>
@endsection
