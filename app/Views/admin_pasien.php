<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h2 style="text-align:center">Data Pasien <span style="color:blue">Klinik Unila</span></h2>
    
    <br>
    <table class="table table-info table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>                
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            <?php foreach ($users as $user) : ?>
            <tr>
                <td scope="row"><?= $i++; ?></td>
                <td><?= $user->username;?></td>
                <td><?= $user->email; ?></td>                    
                <td><?= $user->nama; ?></td>                    
                <td><?= $user->jenis_kelamin; ?></td> 
                <td><?= $user->kontak; ?></td>                    
                
                <td>
                    <a href="<?= base_url('adm/pasien/'.$user->userid.'/edit'); ?>" class="btn btn-info">Edit</a>
                    <form action="<?= base_url('adm/pasien/'.$user->userid) ?>" method="post" style="display: inline-block;">
                        <input type="hidden" name='_method' value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>                    
                </td>
            </tr> 
            <?php endforeach; ?>                   
        </tbody>
    </table>
</div>
<?= $this->endSection('content')?>