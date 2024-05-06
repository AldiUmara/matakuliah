<?php

namespace App\Controllers;

class Product1 extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/Product1');
        echo view('layout/footer');
        
    }
}