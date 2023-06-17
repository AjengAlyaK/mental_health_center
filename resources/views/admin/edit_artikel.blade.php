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
    <base href="/public">
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
                <li class="menu-item">
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
                <li class="menu-item active">
                    <a href="/artikel" class="menu-link">
                        <i class='menu-icon tf-icons bx bx-calendar'></i>
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
            <!-- Form -->
            <div class="col-xl">
                <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Artikel</h5>
                    <a value href="/artikel"><div class="text-muted float-end">Kembali</div></a>
                </div>
                <div class="card-body">
                    <form action="/update_artikel/{{$artikel->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="mb-3">
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <label class="form-label" for="basic-icon-default-fullname">Tanggal</label>
                        <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class='bx bx-calendar'></i></span>
                        <input
                            value="{{$artikel->tanggal}}"
                            autocomplete="off"
                            name="tanggal" type="date"
                            class="form-control"
                            id="basic-icon-default-fullname"
                            aria-label="John Doe"
                            aria-describedby="basic-icon-default-fullname2"
                        />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Judul</label>
                        <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                            ><i class='bx bx-captions' ></i></i
                        ></span>
                        <input
                            value="{{$artikel->judul}}"
                            autocomplete="off"
                            name="judul" type="text"
                            id="basic-icon-default-company"
                            class="form-control"
                            aria-label="ACME Inc."
                            aria-describedby="basic-icon-default-company2"
                        />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-email">Preview</label>
                        <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class='bx bx-note'></i></span>
                        <input
                            value="{{$artikel->preview}}"
                            autocomplete="off"
                            name="preview" type="text"
                            id="basic-icon-default-email"
                            class="form-control"
                            aria-label="john.doe"
                            aria-describedby="basic-icon-default-email2"
                        />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Kutipan</label>
                        <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                            ><i class='bx bx-edit' ></i></i
                        ></span>
                        <input
                            value="{{$artikel->isi2}}"
                            autocomplete="off"
                            name="isi2" type="text"
                            id="basic-icon-default-phone"
                            class="form-control phone-mask"
                            aria-label="658 799 8941"
                            aria-describedby="basic-icon-default-phone2"
                        />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Isi Artikel</label>
                        <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                            ><i class='bx bx-edit' ></i></span>
                        <textarea 
                            autocomplete="off"
                            name="isi1" type="text"
                            id="basic-icon-default-phone"
                            class="form-control phone-mask"
                            aria-label="658 799 8941"
                            aria-describedby="basic-icon-default-phone2">
                            {{$artikel->isi1}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Gambar</label>
                        <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                            ><i class='bx bx-image-alt'></i></span>
                        <input
                            autocomplete="off"
                            name="image" type="file"
                            id="basic-icon-default-phone"
                            class="form-control phone-mask"
                            aria-label="658 799 8941"
                            aria-describedby="basic-icon-default-phone2"
                        />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <!-- Form -->

            @include('admin.content')

            </div>
            </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('admin.script')
</body>
</html>
