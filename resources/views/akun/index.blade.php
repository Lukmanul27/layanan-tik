@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Akun User</h1>
        <hr />
        <a href="{{ route('superadmin.create') }}" class="btn btn-success">
            <i class="bi bi-ui-radios-grid"></i> Tambah User
        </a>
    </div>
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="font-weight-bold text-primary text-uppercase mb-1">
                        Daftar Akun</div>
                        <hr />
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            @foreach ($akun as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->password}}</td>
                                <td>
                                    <a href="{{route('akun.edit',$item->id)}}" class="badge bg-warning">Reset
                                        Password</a>
                                    <form action="{{route('akun.destroy',$item->id)}}" class="d-inline" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                            class="badge bg-danger m-0 border-0">hapus</button>
                                    </form>
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
@endsection
