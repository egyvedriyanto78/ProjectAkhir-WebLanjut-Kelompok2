<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'ADMIN | Dasbor'
        ];
        return view('admin_dashboard', $data);
    }
}
