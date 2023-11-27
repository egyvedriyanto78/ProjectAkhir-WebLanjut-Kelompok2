<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="container">
  <div class="card">
    <div class="card_title">

      <h1>
        <?= lang('Auth.register') ?>
      </h1>
      <span class="subtitle">
        <?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>">
          <?= lang('Auth.signIn') ?>
        </a>
      </span>
    </div>
    <?= view('Myth\Auth\Views\_message_block') ?>

    <div class="form">
      <form action="<?= url_to('register') ?>" method="post">
        <?= csrf_field() ?>

        <div class="input-control">
          <label for="email">
            <?= lang('Auth.email') ?>
          </label>
          <input type="email" name="email" placeholder="<?= lang('Auth.email') ?>" class="form-control 
          <?php if (session('errors.email')): ?>is-invalid<?php endif ?>" value="<?= old('email') ?>">
        </div>

        <div class="input-control">
          <label for="username">
            <?= lang('Auth.username') ?>
          </label>
          <input type="text" name="username" placeholder="<?= lang('Auth.username') ?>" class="form-control 
          <?php if (session('errors.username')): ?>is-invalid<?php endif ?>" value="<?= old('username') ?>">
        </div>

        <div class="input-control">
          <label for="password">
            <?= lang('Auth.password') ?>
          </label>
          <input type="password" name="password" placeholder="<?= lang('Auth.password') ?>" class="form-control 
          <?php if (session('errors.password')): ?>is-invalid<?php endif ?>" autocomplete="off">
        </div>

        <div class="input-control">
          <label for="pass_confirm">
            <?= lang('Auth.repeatPassword') ?>
          </label>
          <input type="password" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" class="form-control 
        <?php if (session('errors.pass_confirm')): ?>is-invalid<?php endif ?>" autocomplete="off">
        </div>

        <button type="submit" class="btn-signup">
          <?= lang('Auth.register') ?>
        </button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection('content') ?>