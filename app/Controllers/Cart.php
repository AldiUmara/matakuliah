<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/cart');
        echo view('layout/footer');
        
    }
}