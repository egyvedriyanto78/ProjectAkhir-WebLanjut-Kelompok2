<?php

namespace App\Controllers;
use App\Models\StokModel;
use App\Models\RecordModel;
use App\Controllers\BaseController;

class ApotekerController extends BaseController
{
    public $stokModel;
    public $recordModel;

    public function __construct(){
        $this->stokModel = new StokModel();
        $this->recordModel = new RecordModel();
    }
    public function index()
    {
        return view('apoteker_dashboard');
    }
    public function resep()
    {
        $db         = \Config\Database::connect();
        $builder    = $db->table('rekam_medis');
        $builder->select('rekam_medis.id as rekamid, rekam_medis.nama, usia, tanggal, keluhan, diagnosa, resep_obat, rekam_medis.status');
        $builder->join('users','users.id = rekam_medis.id_pasien');
        // $builder->join('stok','stok.nama = rekam_medis.resep_obat');
        // $builder->where('name = "dokter"');
        $query      = $builder->get();
        $data = [
            'title' => 'Apoteker | Resep Obat',
            'resep' => $query->getResult(),
        ];
        return view('apoteker_resepobat',$data);
    }
    public function stok()
    {
        $data = [
            // 'title' => 'Stok Obat',
            'stoks' => $this->stokModel->getStok()
        ];
        // dd($data['users']);
        // return view('list_user', $data);
        return view('apoteker_stokobat', $data);
    }

    public function create_stok(){
        return view('apoteker_createstok');
    }
    public function store_stok(){
        $data=[
            'nama' => $this->request->getVar('nama'),
            'stok' => $this->request->getVar('stok')
        ];
        $this->stokModel->saveStok($data);
        return redirect()->to('/apoteker/stok');
    }
    public function update_status_resep($id)
    {
        $data = [
            'status' => "Selesai"
        ];
        $this->recordModel->updateRiwayat($data, $id);
        return redirect()->to('/apoteker/resep');
    }
}
