<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('pages/contact');
        echo view('layout/footer');
    }
}