@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
    </div>
    <hr />
    <div class="container">
        <form action="{{ route('superadmin.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-Mail</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="E-Mail">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Select Role</label>
                <select id="role" name="role" class="form-control">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
