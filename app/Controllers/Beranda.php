<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/Beranda');
        echo view('layout/footer');
        
    }
}