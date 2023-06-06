<?php

namespace App\Controllers;

class Promo extends BaseController
{
    public function index()
    {
        $data =     [
            'title' => 'Promo | MOTAMORPH COFFEE',
            'tes' => ['satu,dua,tiga']
        ];
        echo view('home/promo', $data);
    }
}
