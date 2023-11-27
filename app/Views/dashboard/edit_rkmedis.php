<?= $this->extend('layouts/app-dashboard-dokter')?>
<?= $this->section('content')?>
<main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Pemeriksaan</h1>
            <br>            
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"></h5>

                            <!-- General Form Elements -->
                            <form action="<?= base_url('dokter/rkmedis/'.$record['idrecord'].'/update') ?>" method="post">  
                            <input type="hidden" name="_method" value="PUT">
                                <?= csrf_field() ?>                                                                                                  
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Hasil Diagnosa</label>
                                    <div class="col-sm-10">
                                        <textarea  name="diagnosa" value="<?= $record['diagnosa']?>" class="form-control" style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Resep Obat</label>
                                    <div class="col-sm-10">
                                        <textarea name="resep_obat" value="<?= $record['resep_obat']?>" class="form-control" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main --><?= $this->endSection('content') ?>