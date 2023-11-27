<?= $this->extend ('layouts/app_apoteker')?>
<?= $this->section ('content') ?>

      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Resep Obat</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nomor</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nama Pasien</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Usia</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Obat</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tanggal</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; foreach($resep as $item){?>
                      <tr>
                        <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?= $no++ ?></h6></td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?= $item->nama ?></span>                          
                        </td>
                        <td class="border-bottom-0">
                            <span class="fw-normal"><?= $item->usia ?></span>                          
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?= $item->resep_obat ?></p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal"><?= $item->tanggal ?></p>
                        </td>
                      </tr>   
                      <?php } ?>                    
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?= $this->endSection ('content') ?>