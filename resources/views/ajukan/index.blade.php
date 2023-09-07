@extends('layouts.ajukan')

@section('content')

@foreach ($pelayanan as $item)
<section>
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Ajukan Layanan {{$item->nama}}</h2>
            <p>Silahkan lengkapi form berikut</p>
        </div>

        <div class="col-ms-auto">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                {{$item->nama}}
                            </div>
                            <hr />
                            {{ $item->form }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

@endsection
