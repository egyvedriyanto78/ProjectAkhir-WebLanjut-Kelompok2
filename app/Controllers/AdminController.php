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
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id = auth_groups_users.group_id');
        $builder->where('auth_groups.id', 2);
        $query= $builder->get();
        $data = [
            'title' => 'ADMIN | Apoteker',
            'users' => $query->getResult()
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
