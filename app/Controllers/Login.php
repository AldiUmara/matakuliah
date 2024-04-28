<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/login');
        echo view('layout/footer');
        
    }
}