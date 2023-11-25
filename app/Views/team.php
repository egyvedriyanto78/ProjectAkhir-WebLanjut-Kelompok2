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
                <a href="/" class="nav-item nav-link">Beranda</a>
                <a href="/about" class="nav-item nav-link">Tentang</a>                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="/service" class="dropdown-item">Fasilitas Kesehatan</a>                       
                        <a href="/team" class="dropdown-item active">Dokter</a>
                        <a href="<?= base_url('appointment/'.user()->id); ?>" class="dropdown-item">Buat Janji</a>                                                                                             
                    </div>
                </div>                
            </div>
            <div class="nav-item dropdown">
            <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><i class="fa fa-user ms-3"></i>   Halo, <?= user()->username;?></a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="<?= base_url('profile/'.user()->id); ?>" class="dropdown-item">Profile</a>      
                    <a href="<?= base_url('janji/'.user()->id); ?>" class="dropdown-item ">Janji Anda</a>                                        
                    <a href="<?= base_url('logout'); ?>" class="dropdown-item">Logout</a>                                       
                                                                      
                    </div>
                </div>  
        </div>
    </nav>
    <!-- Navbar End - -->      



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Tenaga Medis</h1>        
        </div>
    </div>
    <!-- Page Header End -->


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