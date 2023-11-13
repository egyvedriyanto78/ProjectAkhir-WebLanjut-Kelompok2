<?= $this->extend('layouts/app_admin') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="containery">
        <div class="d-flex justify-content-center align-items-center">
            <iconify-icon icon="solar:hospital-bold" width="60" height="60"></iconify-icon>
        </div>
        <h1><span style="color:blue">Klinik</span> Unila</h1>
        <h5>|| Mahasiswa Sehat, Negara Ini Sehat ||</h5>
        <main>
            <h3>Tentang Kami</h3>
            <p>
                Klinik Unila adalah fasilitas kesehatan dibawah naungan Universitas Lampung. Guna menyejahterakan dan
                menyehatkan warga Universitas Lampung untuk mencapai Unila Sehat!
            </p>
            <!-- <p>Jl. Prof. Dr. Sumantri Brojonegoro No. 1 Bandar Lampung, 35145, INDONESIA.</p> -->
        </main>
    </div>
</div>

<?= $this->endSection() ?>