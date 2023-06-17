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
    @include('user.head')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            @include('user.1')
        
            <div class="menu-inner-shadow"></div>
        
            <ul class="menu-inner py-1">
                <li class="menu-item active">
                    <a href="/profile" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Akun</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/appointment_user" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Appointment</div>
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
                @include('user.user')
                <!--/ User -->
            </ul>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Contect -->
            <div class="container-xxl flex-grow-1 container-p-y">
                
                <div class="row">
                    <div class="col-md-12">
                    
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img
                            src="sneat-1.0.0/assets/img/avatars/profile.jpg"
                            alt="user-avatar"
                            class="d-block rounded"
                            height="100"
                            width="100"
                            id="uploadedAvatar"
                            />
                            <div class="button-wrapper">

                            </div>
                        </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">
                        <form action="/update_profile/{{$id->id}}" id="formAccountSettings" method="POST">
                            @csrf
                            <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Nama</label>
                                <input
                                value="{{$id->name}}"
                                autocomplete = "off"
                                class="form-control"
                                type="text"
                                id="firstName"
                                name="name"
                                autofocus
                                />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input
                                value="{{$id->email}}"
                                autocomplete = "off"
                                class="form-control"
                                type="text"
                                id="email"
                                name="email"
                                />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Nomor Handphone</label>
                                <div class="input-group input-group-merge">
                                <input
                                    value="{{$id->phone}}"
                                    autocomplete = "off"
                                    type="text"
                                    id="phoneNumber"
                                    name="phone"
                                    class="form-control"
                                />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Alamat</label>
                                <input value="{{$id->address}}" autocomplete = "off" type="text" class="form-control" id="address" name="address" />
                            </div>
                            </div>
                        
                            <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                        </div>
                        <!-- /Account -->
                    </div>
                    
                    </div>
                </div>
                </div>
            <!-- /Contect -->

            </div>
            </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('user.script')
</body>
</html>
