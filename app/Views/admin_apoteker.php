<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h2 style="text-align:center">Apoteker <span style="color:blue">Klinik Unila</span></h2>
    <a href="" class="btn btn-outline-primary add">ADD</a>
    <table class="table table-info table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>E-Mail</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($users as $user){ ?>
            <tr>
                <?php ## dd($user); ?>
                <td><?= $no++ ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->email ?></td>
                <td>Wanita</td>
                <td>081221344356</td>
                <td>Kampung Baru</td>
                <td>
                    <a href="" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td>02</td>
                <td>Chris</td>
                <td>31 Desember 2002</td>
                <td>Pria</td>
                <td>081133224466</td>
                <td>Kedaton</td>
                <td>
                    <a href="" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>03</td>
                <td>Noelle</td>
                <td>21 Maret 2004</td>
                <td>Wanita</td>
                <td>087717273747</td>
                <td>Gedong Meneng</td>
                <td>
                    <a href="" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    <?= $this->endSection() ?>