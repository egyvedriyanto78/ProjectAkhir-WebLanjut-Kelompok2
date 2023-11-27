<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Reset Password
    </title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url("admin/css/style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("admin/css/styles.css") ?>">
    <link rel="stylesheet" href="<?= base_url("admin/css/styles.min.css") ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/css/style.css') ?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
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
                            <a class="sidebar-link" href="<?= base_url('adm/apoteker') ?>" aria-expanded="false">
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
                            <a class="sidebar-link" href="<?= base_url('adm/pasien') ?>" aria-expanded="false">
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
                            <a class="sidebar-link" href="<?= base_url('adm/tentang') ?>" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="mdi:about" width="20" height="20"></iconify-icon>
                                </span>
                                <span class="hide-menu">Tentang</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('adm/galeri') ?>" aria-expanded="false">
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
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
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
                            <h5>
                                admin
                            </h5>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url("../admin/images/profile/user-1.jpg") ?>"
                                        alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="<?= base_url('adm/' . 1 . '/profil') ?>"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">Profil</p>
                                        </a>
                                        <a href="<?= base_url('adm/akun') ?>"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">Akun</p>
                                        </a>
                                        <a href="<?= base_url('logout') ?>"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->

            <?= $this->renderSection('content') ?>

            <div class="py-6 px-6 text-center">
                <p class="mb-0 fs-4">Design and Developed by <span style="color: #2979ff;">Klinik</span> Unila</p>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="<?= base_url("admin/libs/jquery/dist/jquery.min.js") ?>"></script>
    <script src="<?= base_url("admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("admin/js/sidebarmenu.js") ?>"></script>
    <script src="<?= base_url("admin/js/app.min.js") ?>"></script>
    <script src="<?= base_url("admin/libs/apexcharts/dist/apexcharts.min.js") ?>"></script>
    <script src="<?= base_url("admin/libs/simplebar/dist/simplebar.js") ?>"></script>
    <script src="<?= base_url("admin/js/dashboard.js") ?>"></script>
    <script src="<?= base_url("admin/js/gallery.js") ?>"></script>
    <script src="<?= base_url("admin/js/preview.js") ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
</body>

</html>