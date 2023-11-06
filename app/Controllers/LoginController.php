<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $helpers = ['form'];
    public function Login()
    {                      
        // Memuat view login
        return view('login');
    }
    public function store(){
        // if(!$this->validate([                
        //     'username' => 'required|is_unique[user.username]|max_length[10]',
        //     'password' => 'required'
        // ])){           
            
        //     return redirect()->back()->withInput();
        // }  
        $UserModel = new UserModel();
        $login = $this->request->getPost('login');

        if($login){
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if($username=='' or $password== ''){
                $err ="Silahkan isi data akun anda";
            }
            if(empty($err)){
                $dataUser = $UserModel->where("username",$username)->first();
                if($dataUser['password']!= $password){
                    $err = "Password tidak sesuai";
                }
            }
            if(empty($err)){
                $dataSesi =[
                    'id'      => $dataUser['id'],                    
                    'username'=> $dataUser['username'],
                    'password'=> $dataUser['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('home');
            }

            if($err){
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }
        
            
        // }             
        // dd($this->request->getVar());
        // $data = [                        
        //     'username'  => $this->request->getVar('username'),            
        //     'password'  => $this->request->getVar('password'),
        // ];        

        // return redirect()->to('home');
    }
}