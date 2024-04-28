<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        echo view('layout2/header2');
        echo view('pages/produk');
        echo view('layout2/footer2');
    }
}