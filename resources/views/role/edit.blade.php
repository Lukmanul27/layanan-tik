@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Role</h1>
    </div>
    <hr />

    <form action="{{ route('role.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Role" value="{{ $role->name }}">
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-warning">Update</button>
        </div>
    </form>
</div>
@endsection
