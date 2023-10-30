<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function showLogin()
    {
        // Memuat view login
        return view('login');
    }


}