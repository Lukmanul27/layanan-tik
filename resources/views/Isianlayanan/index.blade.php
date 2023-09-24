@extends('layouts.ajukan')

@section('content')
    <div class="heading">
        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Layanan {{ $form->nama }}</h3>
                            <p class="text-subtitle text-muted">Harap isi semua field yang dibutuhkan</p>
                        <hr />
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('Isianlayanan.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $form->id }}" name="pelayanan_id">
                                <div id="form-jenis"></div>
                                <!-- Form Unggah File -->
                                <label for="file">Pilih File:</label>
                                <input type="file" name="file" id="file" required>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="badge bg-success"><i class="bi bi-floppy-fill"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
    <script>
        var formData = JSON.parse({!! json_encode($form->form) !!});

        var formRenderOpts = {
            formData,
            dataType: 'json'
        };
        $("#form-jenis").formRender(formRenderOpts);
    </script>
@endsection
