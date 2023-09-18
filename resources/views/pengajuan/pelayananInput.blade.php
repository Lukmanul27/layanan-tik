@extends('layouts.ajukan')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            {{ $form->nama }}
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("form.answer", $form->id) }}">
                @csrf
                <div id="form-jenis"></div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
