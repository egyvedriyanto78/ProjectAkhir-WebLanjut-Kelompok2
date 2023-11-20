<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PasienModel;

class AdminController extends BaseController
{
    public $pasienModel;

    public function __construct(){
        $this->pasienModel= new PasienModel();
    }
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
        
        $db         = \Config\Database::connect();
        $builder    = $db->table('users');
        $builder->select('users.id as userid, username, email, nama, kontak, jenis_kelamin');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id =  auth_groups_users.group_id');
        $builder->where('name = "pasien"');
        $query      = $builder->get();

        $data = [
            'title' => 'ADMIN | Pasien',
            'users' => $query->getResult()
        ];
        
        return view('admin_pasien', $data);
    }

    public function edit_pasien($id)
    {

        $data = [
            'title' => 'ADMIN | Edit Pasien',
            'pasien'=> $this->pasienModel->getPasien($id)

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
