<?php

namespace App\Controllers;

class Detail extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/Detail');
        echo view('layout/footer');
        
    }
}