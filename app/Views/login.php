<?= $this->extend('layouts/app-login')?>
<?= $this->section('content')?>
<link rel="stylesheet" href="<?= base_url('public/css/style.css'); ?>">

<div class="container">
    <div class="card">
        <div class="card_title">
            <h1>Login</h1>
            <span>Don't have an account? <a href="<?= base_url('register') ?>">Sign Up</a></span>
        </div>
        <div class="form">
            <form action="#" method="post">
                <!-- <input type="text" name="username" id="username" placeholder="UserName" /> -->
                <input type="email" name="email" placeholder="Email" id="email" class="input" />
                <input type="password" name="password" placeholder="Password" id="password" class="input" />
                <button class="form-button">Sign In</button>
            </form>
        </div>
        <div class="card_terms">
            <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of
                    Service</a></span>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>