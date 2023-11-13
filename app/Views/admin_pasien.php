<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <h2 style="text-align:center">Data Pasien <span style="color:blue">Klinik Unila</span></h2>
    <a href="" class="btn btn-outline-primary add">ADD</a>
    <table class="table table-info table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>Arthur</td>
                <td>19</td>
                <td>Pria</td>
                <td>081234567890</td>
                <td>
                    <a href="" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>02</td>
                <td>Furina</td>
                <td>20</td>
                <td>Wanita</td>
                <td>089911223344</td>
                <td>
                    <a href="" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
            <tr>
                <td>03</td>
                <td>Ayaka</td>
                <td>17</td>
                <td>Wanita</td>
                <td>087818283848</td>
                <td>
                    <a href="" class="btn btn-warning">
                        Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    <?= $this->endSection() ?>