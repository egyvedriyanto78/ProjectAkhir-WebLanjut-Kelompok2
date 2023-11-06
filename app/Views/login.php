<?= $this->extend('layouts/app-login')?>
<?= $this->section('content')?>

<div class="container">
    <div class="card">
        <div class="card_title">
            <h1>Masuk</h1>
            <span>Don't have an account? <a href="register">Buat Akun</a></span>
        </div>
        <div class="form">
            <form action="<?php echo base_url('/signin/store')?>" method="post" enctype="multipart/form-data"> 
            <div>
                <label for="username">Nama Pengguna</label>
                <input type="text" name="username" placeholder="Nama Pengguna" id="username" class="form-input" value="<?= session()->getFlashdata('username') ?>">
                
            </div> 
            <div>
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" placeholder="Kata Sandi" id="password" class="form-input">
                
            </div>
            <?php if (session()->getFlashdata('error')){ ?>
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('error'); ?>                    
                </div>
            <?php } ?>

            <input type="submit" name="login" class="form-button" value="LOGIN"/>
                <!-- <button class="form-button" name="login">Masuk</button> -->
            </form>
        </div>        
    </div>
</div>
<?= $this->endSection('content') ?>