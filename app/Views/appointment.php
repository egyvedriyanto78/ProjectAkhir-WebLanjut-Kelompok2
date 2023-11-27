<?= $this->extend ('layouts/app-landing')?>
<?= $this->section ('content') ?>          

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Pendaftaran</p>
                    <h1 class="mb-4">Buat Janji Dengan Dokter Kami</h1>
                    <p class="mb-4">Untuk menghindari penumpukan pasien, harap daftarkan diri anda terlebih dahulu</p>
                    <div class="bg-light rounded d-flex align-items-center p-4 mb-3">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Hubungi Kami</p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">E-mail kami</p>
                            <h5 class="mb-0">klinikunila@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">                
                    <div class="bg-light rounded h-90 d-flex align-items-center p-5">                        
                        <form action="<?= base_url('appointment/'.user()->id.'/store')?>" method="POST" enctype="multipart/form-data">                            
                            <div class="row g-4">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="nama" placeholder="Nama Anda" style="height: 55px;">
                                </div>                                
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="usia" placeholder="Usia" style="height: 55px;">
                                </div>                                
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Pilih Tanggal" data-target="#date" name="tanggal" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>                               
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5"name="keluhan" placeholder="Keluhan Anda"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Buat Janji</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
        

    <?= $this->endSection ('content') ?>