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
                <a href="home" class="nav-item nav-link active">Beranda</a>
                <a href="about" class="nav-item nav-link">Tentang</a>                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="service" class="dropdown-item">Fasilitas Kesehatan</a>                       
                        <a href="team" class="dropdown-item">Dokter</a>
                        <a href="appointment" class="dropdown-item">Buat Janji</a>                                                
                    </div>
                </div>                
            </div>
            
            <div class="nav-item dropdown">
            <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><i class="fa fa-user ms-3"></i>   Halo, <?= user()->username;?></a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="<?= base_url('profile/'.user()->id); ?>" class="dropdown-item">Profile</a>                       
                    <a href="<?= base_url('logout'); ?>" class="dropdown-item">Logout</a>                                       
                                                                      

                    </div>
                </div>   
            
        </div>
    </nav>
    <!-- Navbar End - -->      


    <!-- Header Start -->
    <div class="container-fluid header bg-primary p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white mb-5">Klinik Unila<br>Melayani Sepenuh Hati</h1>
                <div class="row g-4">
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">123</h2>
                            <p class="text-light mb-0">Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">1234</h2>
                            <p class="text-light mb-0">Medical Stuff</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-start border-light ps-4">
                            <h2 class="text-white mb-1" data-toggle="counter-up">12345</h2>
                            <p class="text-light mb-0">Total Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="<?php echo base_url('landing-page/img/carousel-1.jpg') ?>" alt="">                        
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="<?php echo base_url('landing-page/img/carousel-2.jpg')?>" alt="">                        
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="<?php echo base_url('landing-page/img/carousel-3.jpg') ?>" alt="">                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


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
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="about">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Layanan</p>
                <h1>Failitas Kesehatan</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-hospital text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">IGD</h4>
                        <p class="mb-4">Penanganan instalasi Gawat Darurat untuk pasien gawat darurat. </p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-stethoscope text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Poli Umum</h4>
                        <p class="mb-4">Berobat umum dengan tenanga medis berpengalaman.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>        
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-vials text-primary fs-4"></i>
                        </div>
                        <h4 class="mb-3">Laboratorium</h4>
                        <p class="mb-4">Laborarotium pemeriksaan dasar dengan tenaga medis berpengalaman.</p>
                        <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->    


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Team Medis</p>
                <h1>Tenaga Medis Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('landing-page/img/team-1.jpg')?>" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>dr. Nana, S.Ked.</h5>
                            <p class="text-primary">Kepala Klinik </p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('landing-page/img/team-2.jpg')?>" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>dr. Budi, S.ked.</h5>
                            <p class="text-primary">Dokter Umum</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('landing-page/img/team-3.jpg')?>" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Nina, S.Kep., Ns.</h5>
                            <p class="text-primary">Perawat</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('landing-page/img/team-4.jpg')?>" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Anto, S,Kep., Ns.</h5>
                            <p class="text-primary">Laboran</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    
<?= $this->endSection ('content') ?>
