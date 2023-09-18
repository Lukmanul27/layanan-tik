@extends('layouts.ajukan')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4>- Layanan {{ $form->nama }}</h4>
                <p class="text-subtitle text-muted">-> Harap isi semua field yang dibutuhkan</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Buat Form Pelayanan
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route("form.store", $form->id) }}">
                            @csrf
                            <div id="form-jenis"></div>
                            <button type="submit" class="btn btn-secondary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script>
    var formData = JSON.parse({!! json_encode($form->form) !!});

    var formRenderOpts = {
        formData,
        dataType: 'json'
    };
    $('#form-jenis').formReder(formRenderOpts);

</script>
@endsection
