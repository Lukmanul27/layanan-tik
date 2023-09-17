@extends('layouts.admin_pages')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h4 class="h3 mb-0 text-gray-800">Ubah Form <span>{{ $pelayanan->nama }}</span></h4>
                <p class="text-subtitle text-muted">Harap isi semua field yang dibutuhkan</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pelayanan.update', $pelayanan->id) }}" method="POST" id="form">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="nama" value="{{ $pelayanan->nama }}" class="form-control"
                                    id="name" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="detail" class="form-label">Detail</label>
                                <textarea name="deskripsi" id="" cols="30" rows="5" required
                                    class="form-control">{{ $pelayanan->deskripsi }} </textarea>
                            </div>
                            <div id="form-builder" style="min-height: 500px"></div>
                            <input type="hidden" name="form" id="form_input">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script>
    jQuery(function ($) {
        var options = {
            showActionButtons: false,
            disableFields: ['autocomplete', 'paragraph', 'header', 'hidden', 'button',
                'file'
            ],
            disableActionButtons: ['data', 'clear', 'save']
        }

        let formBuilder = $('#form-builder').formBuilder(options);

        $("#form").submit(function (e) {
            let data = formBuilder.actions.getData('json');
            $("#form_input").val(data);
            return true;
        });
    });

</script>
@endpush
