<?= $this->extend('layouts/app-login') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="card">
        <div class="card_title">
            <h1>
                <?= lang('Auth.loginTitle') ?>
            </h1>
            <?php if ($config->allowRegistration): ?>
                <span>Don't have an account? <a href="<?= url_to('register') ?>">Register</a></span>
            <?php endif; ?>
        </div>

        <?= view('Myth\Auth\Views\_message_block') ?>

        <div class="form">
            <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>

                <?php if ($config->validFields === ['email']): ?>
                    <div>
                        <label for="login">
                            <?= lang('Auth.email') ?>
                        </label>
                        <input type="email" name="login" placeholder="<?= lang('Auth.email') ?>" class="form-input 
                <?php if (session('errors.login')): ?>is-invalid<?php endif ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div>
                        <label for="login">
                            <?= lang('Auth.emailOrUsername') ?>
                        </label>
                        <input type="text" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" class="form-input
                <?php if (session('errors.login')): ?>is-invalid<?php endif ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.login') ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div>
                    <label for="password">
                        <?= lang('Auth.password') ?>
                    </label>
                    <input type="password" name="password" placeholder="<?= lang('Auth.password') ?>" class="form-input
                <?php if (session('errors.password')): ?>is-invalid<?php endif ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                    </div>
                </div>


                <button type="submit" class="form-button">
                    <?= lang('Auth.loginAction') ?>
                </button>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>