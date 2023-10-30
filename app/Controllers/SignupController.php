<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SignupController extends BaseController
{
    public function signUp()
    {
        return view("sign_up");
    }
}
