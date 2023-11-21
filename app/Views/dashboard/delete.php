<!-- app/Views/patients/delete.php -->

<?= $this->extend('layouts/app-dashboard-dokter') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>Delete Patient</h2>
    <p>Are you sure you want to delete the patient with ID <?= $patient['id'] ?>, <?= $patient['full_name'] ?>?</p>

    <?= form_open("/patients/delete/{$patient['id']}", ['method' => 'post']) ?>
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="<?= base_url('/patients') ?>" class="btn btn-secondary">Cancel</a>
    <?= form_close() ?>
</div>

<?= $this->endSection() ?>