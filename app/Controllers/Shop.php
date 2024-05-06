<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/Shop');
        echo view('layout/footer');
        
    }
}