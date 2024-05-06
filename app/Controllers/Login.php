<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('layout2/header2');
        echo view('pages/login');
        
    }
}