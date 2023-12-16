<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Data Statistik Pengunjung Klinik</h5>
                        </div>
                        <div>
                            <select class="form-select">
                                <option value="1">2023</option>
                                <option value="2">2022</option>
                                <option value="3">2021</option>
                                <option value="4">2020</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>