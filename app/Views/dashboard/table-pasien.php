<?= $this->extend('layouts/app-dashboard-dokter')?>
<?= $this->section('content')?>


<main id="main" class="main">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Pasien</h5>

            <!-- Default Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Kontak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($users as $user) {
                    ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?=$user->nama;?></td>
                        <td><?=$user->jenis_kelamin;?></td>
                        <td><?=$user->kontak;?></td>
                    </tr>
                    <?php
                     }
                     ?>
                </tbody>
            </table>
            <!-- End Default Table Example -->
        </div>
    </div>
</main>
<?= $this->endSection('content') ?>