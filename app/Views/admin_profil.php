<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <a href="<?= base_url('adm/profil/' . $profil['id']) ?>"
        onclick="return confirm('Apakah Anda yakin ingin menghapus foto profil?');" style="margin:1px;margin-left:4rem"
        class="btn btn-danger">
        Delete Photo
    </a>
    <form action="<?= base_url('adm/profil/' . $profil['id']) ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="foto">Foto</label>
            <img id="preview-image" src="<?= $profil['foto'] ?? base_url("../admin/images/profile/user-1.jpg") ?>"
                style="width:150px;height:150px;margin:1rem">
            <input type="file" class="form-control" id="foto" name="foto" onchange="previewImage()" uploaded>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="username" value="<?= $profil['username'] ?>" name="username" uploaded>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->endSection() ?>v