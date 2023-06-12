<?php

namespace App\Controllers;

class Rating extends BaseController
{
    public function index()
    {
        $data =     [
            'title' => 'Home | MOTAMORPH COFFEE',
            'tes' => ['satu,dua,tiga']
        ];
        echo view('home/rating', $data);
    }
}
