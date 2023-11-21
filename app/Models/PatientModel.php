<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    protected $table            = 'patients';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['full_name', 'birth_date', 'age', 'phone_number', 'email', 'illness','created_at', 'updated_at	
    ', 'gender'];

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

    public function saveUser($data){
        $this->insert($data);
    }
    public function getUser($id = null)
    {
        if($id != null){
            return $this->select('patients.*')->find($id);
        }
        return $this->select('patients.*')->findAll();
    }

    public function updateUser($data, $id){
        return $this->update($id,$data);
    }

    public function deleteUser($id){
        return $this->delete($id);
    }
}