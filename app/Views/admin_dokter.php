<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h2 style="text-align:center">DOKTER <span style="color:blue">KLINIK UNILA</span></h2>
    <a href="" class="btn btn-outline-primary add">ADD</a>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach($users as $user) :?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url("admin/images/dokter/DrEgy.jpeg") ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $user->username; ?></h5>
                    <p class="card-text">IDI 01 17081945</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dokter Spesialis Mata</li>
                    <li class="list-group-item"><?= $user->kontak;?></li>
                    <li class="list-group-item">DKI Jakarta</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                    <a href="#" class="btn btn-outline-danger">Delete</a>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url("admin/images/dokter/DrSalsa.jpeg") ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dr. Salsabila Juandira</h5>
                    <p class="card-text">IDI 23 10111945</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dokter Umum</li>
                    <li class="list-group-item">082310111945</li>
                    <li class="list-group-item">Sumatera Barat</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                    <a href="#" class="btn btn-outline-danger">Delete</a>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url("admin/images/dokter/DrKevin.jpeg") ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dr. Keyvin Jourdan</h5>
                    <p class="card-text">IDI 01 28101928</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dokter Umum</li>
                    <li class="list-group-item">080128101928</li>
                    <li class="list-group-item">DKI Jakarta</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                    <a href="#" class="btn btn-outline-danger">Delete</a>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url("admin/images/dokter/DrPutri.jpeg") ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dr. Putri Maharani Sp.A.</h5>
                    <p class="card-text">IDI 18 30091965</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dokter Spesialis Anak</li>
                    <li class="list-group-item">081830091965</li>
                    <li class="list-group-item">Lampung</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-warning" style="margin-right:20px">Edit</a>
                    <a href="#" class="btn btn-outline-danger">Delete</a>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div> -->

        <?= $this->endSection() ?>