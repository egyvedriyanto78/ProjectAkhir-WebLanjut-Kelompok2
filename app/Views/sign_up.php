<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
  <div class="container">
    <div class="card">
      <div class="card_title">
      
        <h1>Buat Akun</h1>        
        <span class="subtitle">Sudah memiliki akun? <a href="login">Masuk</a></span>        
      </div>      
      <div class="form">        
      <form action="<?= base_url('/register/store')?>" method="post" enctype="multipart/form-data">           
      <div class="input-control">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" id="email" class="form-control <?= (empty(validation_show_error('email')))? 
        '':'is-invalid' ?>" value="<?= old('email') ?>">
        <div class="msg invalid-feedback">
            <?= validation_show_error('email') ?>
        </div>
      </div>
      <div class="input-control">
        <label for="username">Nama Pengguna</label>
        <input type="text" name="username" id="username" placeholder="Nama Pengguna" class="form-control <?= (empty(validation_show_error('username')))? 
        '':'is-invalid' ?>" value="<?= old('username') ?>">
        <div class=" msg invalid-feedback">
            <?= validation_show_error('username') ?>
        </div>
        <div class="input-control">
        <label for="password">Kata Sandi</label>
        <input type="password" name="password" placeholder="Kata Sandi" id="password" class="form-control <?= (empty(validation_show_error('password')))? 
        '':'is-invalid' ?>" value="<?= old('password') ?>">
        <div class="msg invalid-feedback">
            <?= validation_show_error('password') ?>
        </div>
        <button class="btn-signup">Buat Akun</button>      
        </form>
      </div>      
    </div>
  </div>
<?= $this->endSection('content') ?>