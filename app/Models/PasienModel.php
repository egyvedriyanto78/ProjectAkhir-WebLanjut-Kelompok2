<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email','username','nama', 'kontak','jenis_kelamin'];

    // Dates
    protected $useTimestamps = true;
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

    public function getPasien($id){
        return $this->select('users.*')->find($id);        
    }
    
    public function updatePasien($id, $data){
        return $this->update($id,$data);
    }
    // public function saveRiwayat($data){
    //     $this->insert($data);
    // }

    public function destroy($id){
        return $this->where('id', $id)->delete();
    }

    public function getJumlahPasien(){    
        
        return $this->select('COUNT(*) as total_pasien')
        ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
        ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
        ->where('auth_groups.name', 'pasien')
        ->get()
        ->getRow()
        ->total_pasien;
    }    

    
}