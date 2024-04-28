<?php

namespace App\Controllers;

class Thrift extends BaseController
{
    public function index()
    {
        echo view('layout2/header2');
        echo view('pages/beranda');
        echo view('layout2/footer2');
    }
}