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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="/service" class="dropdown-item">Fasilitas Kesehatan</a>                       
                        <a href="/team" class="dropdown-item">Dokter</a>
                        <a href="<?= base_url('appointment/'.user()->id); ?>" class="dropdown-item">Buat Janji</a>                                                
                    </div>
                </div>                
            </div>
            
            <div class="nav-item dropdown">
            <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><i class="fa fa-user ms-3"></i>   Halo, <?= user()->username;?></a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0"> 
                    <a href="<?= base_url('profile/'.user()->id); ?>" class="dropdown-item">Profile</a>                       
                    <a href="<?= base_url('janji/'.user()->id); ?>" class="dropdown-item active">Janji Anda</a>                       
                    <a href="<?= base_url('logout'); ?>" class="dropdown-item">Logout</a>                                       
                                                                      
                    </div>
                </div>   
            
        </div>
    </nav>
    <!-- Navbar End - -->    

<!-- Profile Start    -->
<div class="card-app">
    <div class="tb-app">
        <table class="table caption-top">
        <caption>Janji Anda</caption>
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Usia</th>
            <th scope="col">Tanggal Periksa</th>
            <th scope="col">Keluhan</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $i=1; ?>
            <?php foreach ($record as $key): ?>        
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $key['nama'] ?></td>
                <td><?= $key['usia']?></td>
                <td><?= $key ['tanggal'] ?></td>
                <td><?= $key['keluhan'] ?></td>
            </tr>
            <?php endforeach; ?>       
            
        </tbody>
        </table>
    </div>
</div>
<?= $this->endSection ('content') ?> 