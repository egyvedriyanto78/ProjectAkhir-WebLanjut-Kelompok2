<?= $this->extend('layouts/app_admin') ?>
<?= $this->section('content') ?>

<div class="container-fluid d-flex align-items-center">
    <div class="card w-100">
        <div class="card_title">
            <h1>
                Edit Dokter
            </h1>
        </div>
        <?= view('Myth\Auth\Views\_message_block') ?>

        <div class="form">
            <form action="/adm/updatedokter/<?= $dokter['id']?>" method="post">
                <?= csrf_field() ?>

                <div class="input-control">
                    <label for="idi">
                        IDI
                    </label>
                    <input type="text" name="idi" placeholder="IDI Number" class="form-control"
                        value="<?= $dokter['idi']?>">
                </div>

                <div class="input-control">
                    <label for="nama">
                        Nama
                    </label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control"
                        value="<?= $dokter['nama']?>">
                </div>

                <div class="input-control">
                    <label for="spesialisasi">
                        Spesialisasi
                    </label>
                    <input type="text" name="spesialisasi" placeholder="Spesialisasi" class="form-control"
                        value="<?= $dokter['spesialisasi']?>">
                </div>

                <div class="input-control">
                    <label for="wilayah">
                        Wilayah
                    </label>
                    <input type="text" name="wilayah" placeholder="Wilayah" class="form-control"
                        value="<?= $dokter['wilayah']?>">
                </div>
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn mt-2 w-100 btn-primary">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>