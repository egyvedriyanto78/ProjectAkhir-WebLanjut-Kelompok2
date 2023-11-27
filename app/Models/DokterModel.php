<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','nama'];

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

    

    //public function getDokter($id= null){
        // if($id!= null){
        //     return $this->select('users.id as userid, nama')
        //                 ->join('auth_groups_users','auth_groups_users.user_id = users.id')
        //                 ->join('auth_groups','auth_groups.id =  auth_groups_users.group_id')
        //                 ->where('name = "dokter"')->findAll();
        //             }        
        
        // return $this->select('users.id as userid, nama')
        // ->join('auth_groups_users','auth_groups_users.user_id = users.id')
        // ->join('auth_groups','auth_groups.id =  auth_groups_users.group_id')
        // ->where('name = "dokter"')->findAll();
    //}    
    
}