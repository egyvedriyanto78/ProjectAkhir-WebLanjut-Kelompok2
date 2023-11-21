<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <form action="<?= base_url('adm/profil/' . $profil['id']) ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="foto">Foto</label>
            <img src="<?= $profil['foto'] ?? base_url("../admin/images/profile/user-1.jpg") ?>"
                style="width:150px;height:150px;margin:1rem">
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="username" value="" name="username">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->endSection() ?>v