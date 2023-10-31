<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function Login()
    {
        // Memuat view login
        return view('login');
    }
}