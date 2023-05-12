<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data =     [
            'title' => 'Home | MOTAMORPH COFFEE',
            'tes' => ['satu,dua,tiga']
        ];
        echo view('home/home', $data);
    }
}
