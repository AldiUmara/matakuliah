<?php

namespace App\Controllers;

class Checkout extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/Checkout');
        echo view('layout/footer');
        
    }
}