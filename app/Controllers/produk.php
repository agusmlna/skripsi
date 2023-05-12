<?php

namespace App\Controllers;

class Produk extends BaseController
{
    public function index()
    {
        $data =     [
            'title' => 'Pesan | Motamorph Coffee',
        ];
        echo view('home/pesan-produk', $data);
    }
}
