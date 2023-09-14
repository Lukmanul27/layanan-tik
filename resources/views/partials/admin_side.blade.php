<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo" style="display: flex; align-items: center;">
                    <a href="{{ route('admin.index') }}">
                        <i class="bi bi-brush"></i>
                        <span class="logo-text"
                            style="margin-left: 10px; font-size: 24px; font-weight: bold; color: #498ddb;">
                            PeTIK
                        </span>
                    </a>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item active">
                    <a href="{{ route('admin.index') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Pelayanan</li>

                <li class="sidebar-item">
                    <a href="{{ route('pelayanan.index') }}" class="sidebar-link">
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Daftar Pelayanan</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('pelayanan.create') }}" class="sidebar-link">
                        <i class="bi bi-bricks"></i>
                        <span>Buat Form</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('pengajuan.index') }}" class="sidebar-link">
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Daftar Pengajuan</span>
                    </a>
                </li>

                <li class="sidebar-title">Pages</li>

                <li class="sidebar-item">
                    <a href="{{ route('akun.index') }}" class="sidebar-link">
                        <i class="bi bi-person-circle"></i>
                        <span>Daftar User</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('admin.create') }}" class="sidebar-link">
                        <i class="bi bi-person-plus-fill"></i>
                        <span>Tambah User</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ route('role.index') }}" class="sidebar-link">
                        <i class="bi bi-node-plus"></i>
                        <span>Role User</span>
                    </a>
                </li>

                @guest
                @if (Route::has('login'))
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('login') }}">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>{{ __('Sign In') }}</span>
                </a>
                </li>
                @endif
                @else
                <li class="sidebar-item dropdown">
                    <a class="sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        <span style="color: red;">{{ __('Sign Out') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
        </div>
        </li>
        @endguest
        </ul>
    </div>
</div>
</div>
