@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Role User</h1>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
            Tamabah Role
        </button>
    </div>

    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            {{-- <div class="row no-gutters align-items-center"> --}}
            <div class="col mr-2">

                @foreach($roles as $role)
                <div class="card mb-2">
                    <div class="card-header">
                        {{ $role->name }}
                        <a href="{{route('role.show',$role->id)}}" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($role->users as $row)
                            <li class="list-group-item">
                                {{ $row->name }}
                                <a href="" class="float-right text-danger"
                                    onclick="return confirm('apakah anda yakin?')">hapus</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah User -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Role</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <form action="{{ route('role.store') }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col">
                                            <input type="text" name="name" class="form-control" placeholder="Role Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-grid">
                                            <button class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
