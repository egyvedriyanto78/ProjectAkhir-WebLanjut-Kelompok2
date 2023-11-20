<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

  <div class="container">
    <div class="card">
      <div class="card_title">
      
        <h1>Edit Pasien</h1>                
      </div>
      <?= view('Myth\Auth\Views\_message_block') ?>

      <div class="form">        
      <form action="<?= base_url('adm/pasien/'.$pasien['id'].'/update') ?>" method="post">
      <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>          

      <div class="input-control">
        <label for="Nama">Nama</label>
        <input type="text" name="nama" placeholder="Nama Pasien" class="form-control 
          <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" value="<?= $pasien['nama']?>">
      </div>
    
      <div class="input-control">
        <label for="Jenis Kelamin">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
            <option selected value=""><?= $pasien['jenis_kelamin']==''?'jenis kelamin':$pasien['jenis_kelamin']?></option>
            <option value="Laki-laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>        
        </select>
      </div>

      <div class="input-control">
        <label for="Telepon">Nomor Telepon</label>
        <input type="text" name="telepon" placeholder="Nomor Telepon"  class="form-control 
        <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" value="<?= $pasien['kontak']?>">
      </div>

        <button type="submit" class="btn-signup">Simpan</button>        
      </form>  
      </div>    
    </div>
  </div>
<?= $this->endSection('content') ?>