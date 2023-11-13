<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DokterController extends BaseController
{
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
    public function tableObat(){
        return view ('dashboard/table-obat');
    }

    public function profile(){
        return view ('dashboard/profile');
    }
    
    public function showForm(){
        return view ('dashboard/form-pasien');
    }
}