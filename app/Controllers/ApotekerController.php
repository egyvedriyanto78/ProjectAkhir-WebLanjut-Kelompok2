<?php

namespace App\Controllers;
use App\Models\StokModel;
use App\Controllers\BaseController;

class ApotekerController extends BaseController
{
    public $stokModel;

    public function __construct(){
        $this->stokModel = new StokModel();
    }
    public function index()
    {
        return view('apoteker_dashboard');
    }
    public function resep()
    {
        $db         = \Config\Database::connect();
        $builder    = $db->table('rekam_medis');
        $builder->select('rekam_medis.id as rekamid, nama, usia, tanggal, keluhan,diagnosa, resep_obat');
        $builder->join('users','users.id = rekam_medis.id_pasien');
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
}
