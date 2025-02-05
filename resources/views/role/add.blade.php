@extends('layouts.admin_pages')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah {{$role->name}}</h1>
    </div>
    <hr />
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <form action="{{ route('role-add.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" value="{{$role->name}}">
                        <div class="row mb-3">
                            <div class="col">
                                <select name="user_id" required class="form-control" required>
                                    <option value="">Pilih</option>
                                    @foreach ($user as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
