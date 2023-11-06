<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ApotekerController extends BaseController
{
    public function index()
    {
        return view('apoteker_dashboard');
    }
    public function resep()
    {
        return view('apoteker_resepobat');
    }
    public function stok()
    {
        return view('apoteker_stokobat');
    }
}
