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
                            <th>Status Progres</th>
                            <th>Progres</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($pengajuan->sortByDesc('create_at') as $data)
                            @if($data->status == 'Diterima')
                            <tr>
                                <td>{{$loop->iteration}}.</td>
                                <td>
                                    {{ \App\Models\User::find($data->user_id)->name }}
                                </td>
                                <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                                <td>{{ $data->updated_at->format('Y-m-d') }}</td>
                                <td>{{ $data->status }}</td>
                                <td>{{ $data->process_status }}</td>
                                <td>
                                    <form action="{{ route('updateStatus', ['id' => $data->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="process_status" id="process_status" value="">
                                        <button type="submit" class="btn btn-outline-info rounded-pill btn-sm" onclick="setProcessStatus('dalam_antrian')">
                                            <i class="bi bi-check2-circle"></i> Dalam Antrian
                                        </button>

                                        <button type="submit" class="btn btn-outline-danger rounded-pill btn-sm" onclick="setProcessStatus('diproses')">
                                            <i class="bi bi-recycle"></i> Diproses
                                        </button>

                                        <button type="submit" class="btn btn-outline-success rounded-pill btn-sm" onclick="setProcessStatus('selesai')">
                                            <i class="bi bi-check2-all"></i> Selesai
                                        </button>
                                    </form>
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
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($pengajuan->sortByDesc('created_at') as $data)
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
                                @foreach (json_decode($data->data,true) as $key=>$inputan)
                                @if ($loop->iteration>1)
                                <li>{{ $inputan }}</li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-success" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $('#table').dataTable()

    function setProcessStatus(status) {
        document.getElementById('process_status').value = status;
    }
</script>
@endsection
