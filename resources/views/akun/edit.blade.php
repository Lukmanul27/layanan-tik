@extends('layouts.admin_pages')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reset Password User</h1>
        <hr />
    </div>
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h4 class="mb-0">Reset Password</h4>
            <hr />
            <form action="{{ route('akun.update', $akun->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>
                </div>
                <div class="row">
                    <div class="d-grid">
                        <button class="btn btn-warning">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
