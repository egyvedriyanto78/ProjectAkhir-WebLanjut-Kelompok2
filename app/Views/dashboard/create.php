<?= $this->extend('layouts/app-dashboard-dokter') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>Create New Patient</h2>
    <form method="post" action="<?= base_url('/patients/store') ?>">
        <!-- Add form fields here based on your requirements -->
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<?= $this->endSection() ?>