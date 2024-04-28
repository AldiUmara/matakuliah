<?php

namespace App\Controllers;

class Contoh1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }
    public function penjumlahan ($n1, $n2)
    {
        $contoh2model = new \app\Models\Contoh2();
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $contoh2model ->jumlah($n1, $n2);

        return view ('contoh3',$data);
    }
}
