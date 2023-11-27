<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class SignupController extends BaseController
{
    protected $helpers = ['form'];
    public function signUp()
    {
        return view("sign_up");
    }
    public function store()
    {
        if (
            !$this->validate([
                'email' => 'required|is_unique[user.email]|valid_email',
                'username' => 'required|is_unique[user.username]|max_length[10]',
                'password' => 'required'
            ])
        ) {

            return redirect()->back()->withInput();
        }
        $this->user = new UserModel();
        $this->user->saveUser([
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ]);

        $data = [
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];

        return redirect()->to('home');
    }
}
