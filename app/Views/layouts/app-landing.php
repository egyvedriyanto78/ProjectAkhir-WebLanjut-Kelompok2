<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Klinik Unila</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('landing-page/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('landing-page/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('landing-page/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('landing-page/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('landing-page/css/style.css') ?>" rel="stylesheet">
</head>
<body>    
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Prof. Dr. Ir. Sumantri Brojonegoro, Bandar Lampung, Lampung</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>klinikunila@gmail.com</p>                    
                </div>                                
                </div>                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">klinikunila</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('landing-page/lib/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('landing-page/lib/easing/easing.min.js')?>"></script>
    <script src="<?php echo base_url('landing-page/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('landing-page/lib/counterup/counterup.min.js')?>"></script>
    <script src="<?php echo base_url('landing-page/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('landing-page/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?php echo base_url('landing-page/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?php echo base_url('landing-page/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('landing-page/js/main.js')?>"></script>

</body>