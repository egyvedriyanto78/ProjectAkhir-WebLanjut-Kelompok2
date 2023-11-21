<?= $this->extend('layouts/app-dashboard-dokter') ?>
<?= $this->section('content') ?>

<div class="container">
    <h2>List of Patients</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Birth Date</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient) : ?>
            <tr>
                <td><?= $patient['id'] ?></td>
                <td><?= $patient['full_name'] ?></td>
                <td><?= $patient['birth_date'] ?></td>
                <td><?= $patient['age'] ?></td>
                <td>
                    <a href="<?= base_url("/patients/edit/{$patient['id']}") ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url("/patients/delete/{$patient['id']}") ?>" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this patient?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= base_url('/patients/create') ?>" class="btn btn-primary">Add New Patient</a>
</div>

<?= $this->endSection() ?>