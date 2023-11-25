<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\PasienModel;


class AdminController extends BaseController
{
    public $adminModel;
    public $pasienModel;
    private $profil;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->profil = $this->adminModel->getProfil(1);
        $this->pasienModel= new PasienModel(); 
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
        $db         = \Config\Database::connect();
        $builder    = $db->table('users');
        $builder->select('users.id as userid, username, email, nama, kontak');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id =  auth_groups_users.group_id');
        $builder->where('name = "dokter"');
        $query      = $builder->get();

        $data = [
            'title' => 'ADMIN | Dokter',
            'users' => $query->getResult(),
            'profil' => $this->profil
        ];
        return view('admin_dokter', $data);
    }

    public function pasien()
    {
        
        $db         = \Config\Database::connect();
        $builder    = $db->table('users');
        $builder->select('users.id as userid, username, email, nama, kontak, jenis_kelamin');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id =  auth_groups_users.group_id');
        $builder->where('name = "pasien"');
        $query      = $builder->get();

        $data = [
            'title' => 'ADMIN | Pasien',
            'users' => $query->getResult(),
            'profil' => $this->profil
        ];
        
        return view('admin_pasien', $data);
    }

    public function edit_pasien($id)
    {

        $data = [
            'title' => 'ADMIN | Edit Pasien',
            'pasien'=> $this->pasienModel->getPasien($id),
            'profil' => $this->profil

        ];
        return view('edit_pasien', $data);
    }

    public function update_pasien($id)
    {
        $data=[
            'nama'  => $this->request->getVar('nama'),
            'kontak'=> $this->request->getVar('telepon'),
        ];
        if($this->request->getVar('jenis_kelamin')!=''){
            $data['jenis_kelamin']=$this->request->getVar('jenis_kelamin');
        }
        $this->pasienModel->updatePasien($id, $data);
        return redirect()->to('adm/pasien');
    }
    

    public function destroy($id){
        $this->pasienModel->destroy($id);
        return redirect()->to('adm/pasien');
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
            'users' => $query->getResult(),
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