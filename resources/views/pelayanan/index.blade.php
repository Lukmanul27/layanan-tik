@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Buat Form Layanan</h1>
        <a href="{{ route('pelayanan.create') }}" class="btn btn-success btn-lg">
            <i class="bi bi-ui-radios-grid"> Buat Layanan Baru</i>
        </a>
    </div>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Data</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($pelayanan as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->deskripsi}}</td>
                <td>
                    <a href="{{route('pelayanan.show',$item->id)}}" class="badge bg-success">input</a>
                </td>
                <td>
                    <a href="{{route('pelayanan.edit',$item->id)}}" class="badge bg-warning">Edit</a>
                    <form action="{{route('pelayanan.destroy',$item->id)}}" class="d-inline" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="badge bg-danger m-0 border-0">hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
