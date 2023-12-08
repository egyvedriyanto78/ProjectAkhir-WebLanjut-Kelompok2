<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModel;
use App\Models\PasienModel;
use App\Models\RecordModel;
use App\Models\StokModel;

class DokterController extends BaseController
{
    public $rekam;
    public $dokter;
    public $pasien;
    public $stok;

    public function __construct(){
        $this->rekam= new RecordModel();
        $this->dokter= new DokterModel();
        $this->pasien = new PasienModel();
        $this->stok = new StokModel();
    }
    public function dashboard()
    {
  
        $data = [
            'jumlahPasien' => $this->pasien->getJumlahPasien(),
        ];
        
        return view ('dashboard/dashboard-dokter', $data);
    }

    public function show()
    {
        $jumlahPasien = $this->pasien->getJumlahPasien();
        $stok = $this->stok->getSumStok();
        $obat = $this->stok->getStok();

        $db         = \Config\Database::connect();
        $builder    = $db->table('users');
        $builder->select('users.id as userid, username, email, nama, kontak, jenis_kelamin');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id =  auth_groups_users.group_id');
        $builder->where('name = "pasien"');
        $query      = $builder->get();

        $data = [
            'jumlahPasien' => $jumlahPasien,
            'jumlahStok' => $stok,
            'users' => $query->getResult(),
            'obat' => $obat,
        ];
        return view ('dashboard/dashboard-dokter', $data);
    }
    
    public function tablePasien(){
        
        $db         = \Config\Database::connect();
        $builder    = $db->table('users');
        $builder->select('users.id as userid, username, email, nama, kontak, jenis_kelamin');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id =  auth_groups_users.group_id');
        $builder->where('name = "pasien"');
        $query      = $builder->get();

        $data = [
            'title' => 'DOKTER | Pasien',
            'users' => $query->getResult(),
        ];
        return view ('dashboard/table-pasien', $data);
    }
    public function rekamMedis(){
        $data=[
            'title'=>'Rekam Medis',
            'record'=>$this->rekam->getRekam(),
        ];
        return view ('dashboard/table-obat', $data);
    }
    public function editRkmedis($id){
        $data=[
            'title'=>'Tambah Rekam Medis',
            'record'=>$this->rekam->editRekam($id),
        ];
        // dd($data);
        return view ('dashboard/edit_rkmedis', $data);
    }
    public function updateRkmedis($id){
        $data=[
            'diagnosa'=> $this->request->getVar('diagnosa'),
            'resep_obat'=> $this->request->getVar('resep_obat'),            
        ];
        // dd($data);
        $this->rekam->updateRkmedis($id, $data);
        return redirect()->to('dokter/rkmedis');
    }    

    public function destroy($id){
        $this->rekam->destroy($id);
        return redirect()->to('dokter/rkmedis');
    }

    public function profile(){
        return view ('dashboard/profile');
    }
    public function updateProfile($id){
        $path = 'assets/uploads/img/';
        $foto = $this->request->getFile('foto');

        $data=[
            'nama'=>$this->request->getVar('nama'),
            'kontak'=>$this->request->getVar('kontak'),
            'email'=> $this->request->getVar('email'),
            
        ];
        
        if ($foto->isValid()){
            $name = $foto->getRandomName();

            if ($foto->move($path, $name)){
                $foto_path = base_url($path . $name);

                $data['foto'] = $foto_path;
            }
        }
        
        $this->dokter->updateProfile($id, $data);
        return redirect()->to('dokter/profile');
        
    }
    
    public function showForm(){
        return view ('dashboard/form-pasien');
    }
}