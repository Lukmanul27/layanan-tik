@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Role</h1>
        <a href="{{ route('role.create') }}" class="btn btn-success">
            <i class="bi bi-ui-radios-grid"> Add Roles</i>
        </a>
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
                                <a href="" class="float-right text-danger" onclick="return confirm('apakah anda yakin?')">hapus</a>
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

@endsection
