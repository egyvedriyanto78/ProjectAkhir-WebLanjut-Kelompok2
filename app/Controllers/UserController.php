<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function about(): string
    {
        return view('about');
    }
    public function service(): string
    {
        return view('service');
    }
    public function doctor(): string
    {
        return view('team');
    }
    public function appointment()
    {
        return view ('appointment');
    }
}
