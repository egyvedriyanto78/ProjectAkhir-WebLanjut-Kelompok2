<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('dashboard/img/favicon.png')?>" rel="icon">
    <link href="<?= base_url('dashboard/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('dashboard/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('dashboard/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
    <link href="<?= base_url('dashboard/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('dashboard/vendor/quill/quill.snow.css')?>" rel="stylesheet">
    <link href="<?= base_url('dashboard/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
    <link href="<?= base_url('dashboard/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
    <link href="<?= base_url('dashboard/vendor/simple-datatables/style.css')?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('dashboard/css/style.css')?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/dokter">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-elements.html">
                            <i class="bi bi-circle"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-layouts.html">
                            <i class="bi bi-circle"></i><span>Form Layouts</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-editors.html">
                            <i class="bi bi-circle"></i><span>Form Editors</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-validation.html">
                            <i class="bi bi-circle"></i><span>Form Validation</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dokter/pasien">
                            <i class="bi bi-circle"></i><span>Pasien</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dokter/obat">
                            <i class="bi bi-circle"></i><span>Riwayat Obat</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->




            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/dokter/profile">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->





            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->



            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li><!-- End Blank Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->
    <?= $this->renderSection('content') ?>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('dashboard/vendor/apexcharts/apexcharts.min.js')?>"></script>
    <script src="<?= base_url('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('dashboard/vendor/chart.js/chart.umd.js')?>"></script>
    <script src="<?= base_url('dashboard/vendor/echarts/echarts.min.js')?>"></script>
    <script src="<?= base_url('dashboard/vendor/quill/quill.min.js')?>"></script>
    <script src="<?= base_url('dashboard/vendor/simple-datatables/simple-datatables.js')?>"></script>
    <script src="<?= base_url('dashboard/vendor/tinymce/tinymce.min.js')?>"></script>
    <script src="<?= base_url('dashboard/vendor/php-email-form/validate.js')?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('dashboard/js/main.js')?>"></script>

</body>