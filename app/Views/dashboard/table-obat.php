<?= $this->extend('layouts/app-dashboard-dokter')?>
<?= $this->section('content')?>

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Tanggal Periksa</th>
                        <th scope="col">Keluhan</th>
                        <th scope="col">Diagnosa</th>
                        <th scope="col">Resep Obat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($record as $key): ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $key['nama']?></td>
                        <td><?= $key['usia']?></td>
                        <td><?= $key['tanggal']?></td>
                        <td><?= $key['keluhan']?></td>
                        <td><?= $key['diagnosa']?></td>
                        <td><?= $key['resep_obat']?></td>
                        <td>
                            <a href="<?= base_url('dokter/rkmedis/'.$key['idrecord'].'/edit') ?>" class="btn btn-primary">Edit</a>
                            <form action="<?= base_url('dokter/rkmedis/'.$key['idrecord']) ?>" method="post" style="display: inline-block;">
                                <input type="hidden" name='_method' value="DELETE">
                                <?= csrf_field() ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>                    
                        </td>
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
</main>
<?= $this->endSection('content') ?>