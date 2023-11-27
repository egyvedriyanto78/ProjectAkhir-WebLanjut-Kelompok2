<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <?= view('App\Views\Auth\_message_block') ?>

    <p>
        <?= lang('Auth.enterEmailForInstructions') ?>
    </p>
    <form action="<?= url_to('forgot') ?>" method="post">
        <?= csrf_field() ?>

        <div class="input-control">
            <label for="email">
                <?= lang('Auth.emailAddress') ?>
            </label>
            <input type="email" name="email" placeholder="<?= lang('Auth.email') ?>" class="form-control 
            <?php if (session('errors.email')): ?>is-invalid<?php endif ?>" value="<?= old('email') ?>">
        </div>
        <div class="invalid-feedback">
            <?= session('errors.email') ?>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:1rem">Reset Password</button>
    </form>
</div>

<?= $this->endSection() ?>