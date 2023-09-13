@extends('layouts.admin_pages')

@section('content')
<div class="page-heading">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h4>Form Pelayanan TIK</h4>
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
                                            <a href="{{route('pelayanan.show',$item->id)}}"
                                                class="badge bg-success">input</a>
                                        </td>
                                        <td>
                                            <a href="{{route('pelayanan.edit',$item->id)}}"
                                                class="badge bg-warning">Edit</a>
                                            <form action="{{route('pelayanan.destroy',$item->id)}}" class="d-inline"
                                                method="post">
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
    </div>
</div>

@endsection
