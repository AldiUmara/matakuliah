<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/register');
        echo view('layout/footer');
        
    }
}