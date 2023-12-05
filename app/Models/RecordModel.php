<?php

namespace App\Models;

use CodeIgniter\Model;

class RecordModel extends Model
{
    protected $table            = 'rekam_medis';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pasien','nama','usia','tanggal','keluhan', 'diagnosa', 'resep_obat','status'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getRekam($id = null){
        if($id != null){
            return $this->select('rekam_medis.id as idrecord, rekam_medis.id_pasien as idpasien, rekam_medis.nama, rekam_medis.usia,
                        rekam_medis.tanggal, rekam_medis.keluhan, rekam_medis.diagnosa, rekam_medis.resep_obat')
                        ->join('users', 'users.id= rekam_medis.id_pasien')
                        ->where('rekam_medis.id_pasien', $id)
                        ->findAll($id);
        }
        return $this->select('rekam_medis.id as idrecord, rekam_medis.id_pasien, rekam_medis.nama, rekam_medis.usia,
                    rekam_medis.tanggal, rekam_medis.keluhan, rekam_medis.diagnosa, rekam_medis.resep_obat')
                    ->join('users', 'users.id= rekam_medis.id_pasien')
                    ->findAll();
    }
    public function saveRiwayat($data){
        $this->insert($data);
    }
    public function updateRiwayat($data, $id){
        $this->update($id, $data);
    }
}
