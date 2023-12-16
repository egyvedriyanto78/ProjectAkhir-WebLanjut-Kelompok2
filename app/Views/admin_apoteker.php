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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($users as $user) { ?>
                <tr>
                    <?php ## dd($user); ?>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $user->username ?>
                    </td>
                    <td>
                        <?= $user->email ?>
                    </td>
                    <td>
                        <?= $user->jenis_kelamin ?>
                    </td>
                    <td>
                        <?= $user->kontak ?>
                    </td>
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
        </tbody>
    </table>

    <?= $this->endSection() ?>