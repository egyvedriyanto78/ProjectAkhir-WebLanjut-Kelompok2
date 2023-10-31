<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("admin/css/style.css") ?>">   
    <link rel="stylesheet" href="<?= base_url("admin/css/styles.css") ?>"> 
    <link rel="stylesheet" href="<?= base_url("admin/css/styles.min.css") ?>">
</head>

<body>
    <?= $this->renderSection('content') ?>

    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?= base_url("admin/libs/jquery/dist/jquery.min.js") ?>"></script>
    <script src="<?= base_url("admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("admin/js/sidebarmenu.js") ?>"></script>
    <script src="<?= base_url("admin/js/app.min.js") ?>"></script>
    <script src="<?= base_url("admin/libs/apexcharts/dist/apexcharts.min.js") ?>"></script>
    <script src="<?= base_url("admin/libs/simplebar/dist/simplebar.js") ?>"></script>
    <script src="<?= base_url("admin/js/dashboard.js") ?>"></script>
</body>

</html>