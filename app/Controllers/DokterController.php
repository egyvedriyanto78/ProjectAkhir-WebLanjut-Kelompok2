<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModel;
use App\Models\RecordModel;

class DokterController extends BaseController
{
    public $rekam;
    public $dokter;

    public function __construct(){
        $this->rekam= new RecordModel();
        $this->dokter= new DokterModel();
    }
    public function dashboard()
    {
        return view ('dashboard/dashboard-dokter');
    }

    public function show(){
        return view ('dashboard/dashboard-dokter');
    }
    
    public function tablePasien(){
        return view ('dashboard/table-pasien');
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
        $data=[
            'nama'=>$this->request->getVar('nama'),
            'kontak'=>$this->request->getVar('kontak'),
            'email'=> $this->request->getVar('email'),
        ];
        
        $this->dokter->updateProfile($id, $data);
        return redirect()->to('dokter/profile');
        
    }
    
    public function showForm(){
        return view ('dashboard/form-pasien');
    }
}