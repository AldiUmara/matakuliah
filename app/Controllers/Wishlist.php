<?php

namespace App\Controllers;

class Wishlist extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/wishlist');
        echo view('layout/footer');
        
    }
}