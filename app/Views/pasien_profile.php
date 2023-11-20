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

<!-- Profile Start    -->
<div class=" card-profile card w-50">
  <div class="card-body">
    <h5 class="card-title">Profile</h5>
    <p class="card-text">Username : <?= $users->username;?></p>
    <p class="card-text">Nama Lengkap : <?= $users->nama;?></p>
    <p class="card-text">Jenis Kelamin : <?= $users->jenis_kelamin;?></p>
    <p class="card-text">No. Telepon : <?= $users->kontak;?></p>

    <a href="<?= base_url('profile/'.$users->userid.'/edit'); ?>" class="btn btn-primary">Edit</a>    
  </div>
</div>


<?= $this->endSection ('content') ?>        