<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('')}}assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ES-Voting</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('')}}assets/images/dp.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ asset('') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Kelola Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('data-kandidat') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kandidat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('data-pemilih') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pemilih</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ asset('') }}" class="nav-link">
                        <i class="nav-icon fas fa-vote-yea"></i>
                        <p>Bilik Suara</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ asset('') }}" class="nav-link">
                        <i class="nav-icon fas fa-box-open"></i>
                        <p>Kotak Suara</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ asset('') }}" class="nav-link">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>Hasil Suara</p>
                    </a>
                </li>
                <hr>
                <li class="nav-item has-treeview">
                    <a href="{{ asset('') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ asset('') }}" class="nav-link">
                        <i class="nav-icon fas fa-power-off" style="color: #dc3545;"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>