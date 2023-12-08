<?= $this->extend('layouts/app_admin') ?>
<?= $this->section('content') ?>

<div class="container-fluid d-flex align-items-center">
    <div class="card w-100">
        <div class="card_title">
            <h1>
                Tambah Dokter
            </h1>
        </div>
        <?= view('Myth\Auth\Views\_message_block') ?>

        <div class="form">
            <form action="<?= url_to('create_dokter') ?>" method="post">
                <?= csrf_field() ?>

                <div class="input-control">
                    <label for="email">
                        <?= lang('Auth.email') ?>
                    </label>
                    <input type="email" name="email" placeholder="<?= lang('Auth.email') ?>" class="form-control">
                </div>

                <div class="input-control">
                    <label for="username">
                        <?= lang('Auth.username') ?>
                    </label>
                    <input type="text" name="username" placeholder="<?= lang('Auth.username') ?>" class="form-control">
                </div>

                <div class="input-control">
                    <label for="password">
                        <?= lang('Auth.password') ?>
                    </label>
                    <input type="password" name="password" placeholder="<?= lang('Auth.password') ?>"
                        class="form-control" autocomplete="off">
                </div>

                <div class="input-control">
                    <label for="pass_confirm">
                        <?= lang('Auth.repeatPassword') ?>
                    </label>
                    <input type="password" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>"
                        class="form-control" autocomplete="off">
                </div>

                <button type="submit" class="btn mt-2 w-100 btn-primary">
                    <?= lang('Auth.register') ?>
                </button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>