<?= $this->extend ('layouts/app-landing')?>
<?= $this->section ('content') ?>

    <!-- Navbar Begin-->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik Unila</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="home" class="nav-item nav-link">Beranda</a>
                <a href="about" class="nav-item nav-link active">Tentang</a>                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="service" class="dropdown-item">Fasilitas Kesehatan</a>                       
                        <a href="team" class="dropdown-item">Dokter</a>
                        <a href="<?= base_url('appointment/'.user()->id); ?>" class="dropdown-item">Buat Janji</a>                                                                                           
                    </div>
                </div>                
            </div>
            <div class="nav-item dropdown">
            <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><i class="fa fa-user ms-3"></i>   Halo, <?= user()->username;?></a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="<?= base_url('profile/'.user()->id); ?>" class="dropdown-item">Profile</a>
                    <a href="<?= base_url('janji/'.user()->id); ?>" class="dropdown-item">Janji Anda</a>                                              
                    <a href="<?= base_url('logout'); ?>" class="dropdown-item">Logout</a>                                       
                                                                      
                    </div>
                </div>   
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>            
        </div>
    </div>
    <!-- Page Header End -->    

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="<?php echo base_url('landing-page/img/about-1.jpg')?>" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="<?php echo base_url('landing-page/img/about-2.jpg')?>" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
                    <h1 class="mb-4">Kenapa harus ke Klinik Unila? Cari tahu tentang kami!</h1>
                    <p>Klinik Unila adalah fasilitas kesehatan dibawah naungan Universitas Lampung. Guna menyejahterakan dan menyehatkan warga Universitas Lampung untuk mencapai Unila Sehat!</p>
                    <p class="mb-4">Fasilitas yang bisa didapatkan di Klinik Unila:</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Pusat Kesehatan Berkualitas</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Poli Klinik</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Tenaga Kesehatan Berpengalaman</p>
                    <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <p class="d-inline-block border rounded-pill text-light py-1 px-4">Features</p>
                        <h1 class="text-white mb-4">Kenapa Memilih Kami</h1>
                        <p class="text-white mb-4 pb-2">Klinik Unila adalah salah satu fasilitas kesehatan terdekat di lingkungan Universitas Lampung. Dengan tenaga kesehatan berpengalaman, kami siap membantu anda dengan sepenuh hati.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-user-md text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Tenaga Medis</p>
                                        <h5 class="text-white mb-0">Berpengalaman</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-check text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Pelayanan</p>
                                        <h5 class="text-white mb-0">Berkualitas</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-stethoscope text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">Peralatan</p>
                                        <h5 class="text-white mb-0">Terbaru</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-headphones text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="text-white mb-2">24 Hours</p>
                                        <h5 class="text-white mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url('landing-page/img/feature.jpg')?>" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    
        

    <?= $this->endSection ('content') ?>