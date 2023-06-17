<!DOCTYPE html>

<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="sneat-1.0.0/assets/"
data-template="vertical-menu-template-free"
>
<head>
    @include('admin.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            @include('admin.1')
    
            <div class="menu-inner-shadow"></div>
    
            <ul class="menu-inner py-1">
                <li class="menu-item">
                    <a href="/user" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-user'></i>
                        <div data-i18n="Analytics">User</div>
                    </a>
                </li>
                <li class="menu-item active">
                    <a href="/dokter" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-plus-medical'></i>
                        <div data-i18n="Analytics">Dokter</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/appointment" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-calendar'></i>
                        <div data-i18n="Analytics">Konseling</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/artikel" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-news'></i>
                        <div data-i18n="Analytics">Artikel</div>
                    </a>
                </li>
            </ul>
    </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
        <!-- Navbar -->

        <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
        >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
            </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                {{-- <a href="/page">Dashboard</a> --}}
                </li>

                <!-- User -->
                @include('admin.user')
                <!--/ User -->
            </ul>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Tabel Dokter</h5>
                    <div class="card-body">
                        <div class="demo-inline-spacing">
                            <a href="/tambah" type="button" class="btn btn-outline-primary">Tambah</a>
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                    </div>
                <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Spesialis</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach ($doc as $d)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$d->name}}</strong></td>
                        <td>{{$d->spesialis}}</td>
                        <td>{{$d->no_hp}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->image}}</td>
                        <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="/edit_dokter/{{$d->id}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                            >
                            <a class="dropdown-item" href="/delete_dokter/{{$d->id}}"
                                ><i class="bx bx-trash me-1"></i> Hapus</a
                            >
                            </div>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
                </div>
            </div>
        </div>
            <!--/ Basic Bootstrap Table -->

            @include('admin.content')

            </div>
            </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('admin.script')
</body>
</html>
