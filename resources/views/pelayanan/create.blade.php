@extends('layouts.superadmin_ui')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
    </div>
    <hr />
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="container">
                        <form action="{{ route('pelayanan.store') }}" method="POST" id="form">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="nama" class="form-control" id="name" placeholder="Name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="detail" class="form-label">Detail</label>
                                <textarea name="deskripsi" id="" cols="30" rows="5" required
                                    class="form-control"></textarea>
                            </div>
                            <div id="form-builder" style="min-height: 500px"></div>
                            <input type="hidden" name="form" id="form_input">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


                @endsection

                @push('script')

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
                        })
                    });

                </script>

            </div>
        </div>
    </div>
</div>
@endpush
