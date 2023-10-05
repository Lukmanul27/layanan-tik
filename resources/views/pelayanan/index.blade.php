@extends('layouts.admin_pages')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4 class="h3 mb-0 text-gray-800">List Pelayanan</h4>
                <p class="text-subtitle text-muted">Berikut merupakan daftar pelayanan yang tersedia</p>
            </div>
        </div>
    </div>
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="scrollable-content">
                        <table class="table" id="table">
                            <thead>
                                <th></th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($pelayanan as $item)
                                <tr>
                                    <td>{{$loop->iteration}}.</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td>
                                        <a href="{{route('pelayanan.edit',$item->id)}}"
                                            class="badge bg-warning">Edit</a>
                                        <button type="button" class="badge bg-danger m-0 border-0"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteConfirmationModal-{{ $item->id }}">hapus</button>
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
</div>
@foreach ($pelayanan as $item)
<div class="modal fade" id="deleteConfirmationModal-{{ $item->id }}" tabindex="-1" role="dialog"
    aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin menghapus pelayanan <span class="text-danger capitalize">{{ $item->nama }}</span>?
            </div>
            <div class="modal-footer">
                <button type="button" class="badge bg-secondary close" data-bs-dismiss="modal" aria-label="Close">Cancel
                <form action="{{ route('pelayanan.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="badge bg-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
