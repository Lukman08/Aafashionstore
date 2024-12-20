<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('guest/img/logo.png') }}" alt="Aafashionstore" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Aafashionstore</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Abi Malkhan</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('produk') }}"
                        class="nav-link {{ request()->is('admin/produk') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Produk
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('penyakit') }}" class="nav-link {{ request()->is('admin/penyakit') ? ' active' : '' }}">
                        <i class="nav-icon fa fa-asterisk"></i>
                        <p>
                            Data Penyakit
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('gejala') }}" class="nav-link {{ request()->is('admin/gejala') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data Gejala
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aturan') }}" class="nav-link {{ request()->is('admin/aturan') ? ' active' : '' }}">
                        <i class="nav-icon fa fa-tasks"></i>
                        <p>
                            Data Aturan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('diagnosa') }}"
                        class="nav-link {{ request()->is('admin/diagnosa') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Diagnosa
                        </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('konsultasi') }}"
                        class="nav-link {{ request()->is('admin/konsultasi') ? ' active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Konsultasi
                        </p>
                    </a>
                </li> --}}
                <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
