<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    public $adminModel;
    private $profil;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->profil = $this->adminModel->getProfil(1);
    }

    public function index()
    {
        $data = [
            'title' => 'ADMIN | Dasbor',
            'profil' => $this->profil
        ];
        return view('admin_dashboard', $data);
    }

    public function edit_profil($id)
    {
        $data = [
            'title' => 'ADMIN | Profil',
            'profil' => $this->profil
        ];
        return view('admin_profil', $data);
    }

    public function update_profil($id)
    {
        $path = 'admin/images/profile/';

        $foto = $this->request->getFile('foto');

        if ($foto->isValid()) {
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)) {
                $foto_path = base_url($path . $name);
            }
        }

        $data = [
            'username' => $this->request->getVar('username'),
            'foto' => $foto_path
        ];

        $result = $this->adminModel->updateProfil($data, $id);

        if (!$result) {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan data');
        }

        return redirect()->to('/adm');
    }

    public function dokter()
    {
        $data = [
            'title' => 'ADMIN | Dokter',
            'profil' => $this->profil
        ];
        return view('admin_dokter', $data);
    }

    public function pasien()
    {
        $data = [
            'title' => 'ADMIN | Pasien',
            'profil' => $this->profil
        ];
        return view('admin_pasien', $data);
    }

    public function apoteker()
    {
        $data = [
            'title' => 'ADMIN | Apoteker',
            'profil' => $this->profil
        ];
        return view('admin_apoteker', $data);
    }

    public function tentang()
    {
        $data = [
            'title' => 'ADMIN | Tentang',
            'profil' => $this->profil
        ];
        return view('admin_tentang', $data);
    }

    public function galeri()
    {
        $data = [
            'title' => 'ADMIN | Galeri',
            'profil' => $this->profil
        ];
        return view('admin_galeri', $data);
    }

    public function akun()
    {
        $data = [
            'title' => 'ADMIN | Akun',
            'profil' => $this->profil
        ];
        return view('admin_akun', $data);
    }
}
