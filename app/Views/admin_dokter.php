<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="<?= base_url('adm') ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                    <h3 class="m-0 text-primary"><iconify-icon icon="solar:hospital-bold" width="30"
                            height="30"></iconify-icon></i>Klinik Unila
                    </h3>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Utama</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('adm') ?>" aria-expanded="false">
                            <span>
                                <iconify-icon icon="material-symbols:dashboard-outline" width="20"
                                    height="20"></iconify-icon>
                            </span>
                            <span class="hide-menu">Dasbor</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">INFORMASI PENGGUNA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                            <span>
                                <iconify-icon icon="mdi:doctor" width="20" height="20"></iconify-icon>
                            </span>
                            <span class="hide-menu">Apoteker</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('adm/dokter') ?>" aria-expanded="false">
                            <span>
                                <iconify-icon icon="healthicons:doctor-male" width="20" height="20"></iconify-icon>
                            </span>
                            <span class="hide-menu">Dokter</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                            <span>
                                <iconify-icon icon="material-symbols:patient-list" width="20"
                                    height="20"></iconify-icon>
                            </span>
                            <span class="hide-menu">Pasien</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">INFORMASI LAINNYA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                            <span>
                                <iconify-icon icon="mdi:about" width="20" height="20"></iconify-icon>
                            </span>
                            <span class="hide-menu">Tentang</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                            <span>
                                <iconify-icon icon="mdi:camera" width="20" height="20"></iconify-icon>
                            </span>
                            <span class="hide-menu">Galeri</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                            <iconify-icon icon="mdi:bell-outline"></iconify-icon>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../admin/images/profile/user-1.jpg" alt="" width="35" height="35"
                                    class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">My Account</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">My Task</p>
                                    </a>
                                    <a href="<?= base_url('') ?>"
                                        class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
            <a href="" class="btn btn-outline-primary">ADD</a>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url("admin/images/dokter/DrEgy.jpeg") ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Egy Vedriyanto Sp.M.</h5>
                            <p class="card-text">IDI 01 17081945</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dokter Spesialis Mata</li>
                            <li class="list-group-item">080117081945</li>
                            <li class="list-group-item">DKI Jakarta</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                            <a href="#" class="btn btn-outline-danger">Delete</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url("admin/images/dokter/DrSalsa.jpeg") ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Salsabila Juandira</h5>
                            <p class="card-text">IDI 23 10111945</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dokter Umum</li>
                            <li class="list-group-item">082310111945</li>
                            <li class="list-group-item">Sumatera Barat</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                            <a href="#" class="btn btn-outline-danger">Delete</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url("admin/images/dokter/DrKevin.jpeg") ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Keyvin Jourdan</h5>
                            <p class="card-text">IDI 01 28101928</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dokter Umum</li>
                            <li class="list-group-item">080128101928</li>
                            <li class="list-group-item">DKI Jakarta</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                            <a href="#" class="btn btn-outline-danger">Delete</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url("admin/images/dokter/DrPutri.jpeg") ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dr. Putri Maharani Sp.A.</h5>
                            <p class="card-text">IDI 18 30091965</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dokter Spesialis Anak</li>
                            <li class="list-group-item">081830091965</li>
                            <li class="list-group-item">Lampung</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                            <a href="#" class="btn btn-outline-danger">Delete</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Design and Developed by <span style="color: #2979ff;">Klinik</span> Unila</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>