@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Role</h1>
        <a href="{{ route('role.create') }}" class="btn btn-success btn-lg">
            <i class="bi bi-ui-radios-grid"> Add Roles</i>
        </a>
    </div>


    @if($roles->count() > 0)
    @foreach($roles as $role)
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <h5 class="mb-0">{{ $role->name }}</h5>
                            </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="opacity: 0.7">{{ $role->guard_name }}</div>
                        </div>
                        <div class="col-auto d-flex justify-content-center align-items-center">
                            <a href="{{ route('role.edit', $role->id) }}" class="btn btn-success mx-2">Edit</a>
                            <form action="{{ route('role.destroy', $role->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mx-2">Hapus</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p class="text-center">Role not found</p>
@endif


</div>

@endsection
