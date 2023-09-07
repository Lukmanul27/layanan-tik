<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pelayanan TIK</title>
    <link href="{{ asset('ui_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('ui_admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ui_admin/css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body id="page-top">

<div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="bi bi-globe2"></i>
            </div>
            <div class="sidebar-brand-text mx-2">Pelayanan TIK</div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('superadmin.index') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Superadmin
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="bi bi-person-circle"></i>
                <span>User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Akun User</h6>
                    <a class="collapse-item" href="{{ route('akun.index') }}">Data Akun</a>
                    <hr />
                    <h6 class="collapse-header">Kelola Akun User</h6>
                    <a class="collapse-item" href="{{ route('superadmin.create') }}">Tambah User</a>
                    <a class="collapse-item" href="{{ route('role.index') }}">Role User</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="bi bi-file-ruled-fill"></i>
                <span>Pelayanan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Daftar Pelayanan</h6>
                    <a class="collapse-item" href="{{ route('pelayanan.index') }}">Form Pelayanan</a>
                    <a class="collapse-item" href="">Daftar Permintaan</a>
                </div>
            </div>
        </li>

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

            <main class="py-4">
                @yield('content')
            </main>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('ui_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ui_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ui_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('ui_admin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('ui_admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('ui_admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('ui_admin/js/demo/chart-pie-demo.js') }}"></script>
    @include('sweetalert::alert')


    @stack('script')

    </body>

    </html>
