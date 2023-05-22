<?php

namespace App\Controllers;

class Booking extends BaseController
{
    public function index()
    {
        $data =     [
            'title' => 'Reservasi | Motamorph Coffee',
        ];
        echo view('home/reservasi', $data);
    }
}
