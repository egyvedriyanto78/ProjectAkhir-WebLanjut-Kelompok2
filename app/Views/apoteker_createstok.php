<?= $this->extend ('layouts/app_apoteker')?>
<?= $this->section ('content') ?>

      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                  <h5 class="card-title fw-semibold mb-4">Tambah Stok Obat</h5>
                  <div class="card">
                    <div class="card-body">
                      <form action="<?= base_url('/apoteker/store_stok') ?>" method="post">
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama" aria-describedby="namaHelp" name="nama">
                        </div>
                        <div class="mb-3">
                          <label for="stok" class="form-label">Stok</label>
                          <input type="text" class="form-control" id="stok" name="stok">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?= $this->endSection ('content') ?>