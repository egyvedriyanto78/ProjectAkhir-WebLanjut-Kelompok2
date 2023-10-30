<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'ADMIN | Login'
        ];
        return view('home_admin', $data);
    }

    public function dashboard()
    {
        $data = [
            'title' => 'ADMIN | Dashboard'
        ];
        return view('home_db', $data);
    }
}
