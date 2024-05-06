<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        echo view('layout2/header2');
        echo view('pages/register');
        
    }
}