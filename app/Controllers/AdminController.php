<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'ADMIN | Dasbor'
        ];
        return view('admin_dashboard', $data);
    }

    public function dokter()
    {
        $data = [
            'title' => 'ADMIN | Dokter'
        ];
        return view('admin_dokter', $data);
    }

    public function pasien()
    {
        $data = [
            'title' => 'ADMIN | Pasien'
        ];
        return view('admin_pasien', $data);
    }

    public function apoteker()
    {
        $data = [
            'title' => 'ADMIN | Apoteker'
        ];
        return view('admin_apoteker', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'ADMIN | Tentang'
        ];
        return view('admin_tentang', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'ADMIN | Galeri'
        ];
        return view('admin_galeri', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'ADMIN | Profil'
        ];
        return view('admin_profil', $data);
    }

    public function akun()
    {
        $data = [
            'title' => 'ADMIN | Akun'
        ];
        return view('admin_akun', $data);
    }
}
