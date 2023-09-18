<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DISKOMINFO | Pelayanan TIK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}" />
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon" /> --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png" />
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}" />

</head>

<body>
    <div id="app">
        <div id="main_xx">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Need: Apexcharts -->
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('ui_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ui_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ui_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('ui_admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('ui_admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('ui_admin/js/demo/chart-area-demo.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
