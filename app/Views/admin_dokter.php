<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h2 style="text-align:center">DOKTER <span style="color:blue">KLINIK UNILA</span></h2>
    <a href="<?= url_to('create_dokter')?>" class="btn btn-outline-primary add">ADD</a>
    <div class="row row-cols-3 row-cols-md-3 g-4">
        <?php foreach ($users as $user): ?>
        <div class="col-4">
            <div class="card h-100" style="width: 100%;">
                <img src="<?= $user->foto ?>" class="card-img-top "
                    style="height: 400px; width: 300px; object-fit: cover;" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $user->nama; ?>
                    </h5>
                    <p class="card-text">IDI <?= $user->idi?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user->spesialisasi?></li>
                    <li class="list-group-item">
                        <?= $user->kontak; ?>
                    </li>
                    <li class="list-group-item"><?= $user->wilayah?></li>
                </ul>
                <div class="card-body d-flex justify-content-start align-items-center">
                    <a href="/adm/<?= $user->userid;?>/editdokter" class="btn me-2 btn-outline-warning"
                        style="margin-right:20px">Edit</a>
                    <form action="/adm/dokter/<?= $user->id?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button class="btn btn-outline-danger">
                            Delete
                        </button>
                    </form>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection() ?>