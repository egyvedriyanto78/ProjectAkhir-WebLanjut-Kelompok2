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