<?php

namespace App\Controllers;

use App\Models\ReservasiModel;

class Booking extends BaseController
{
    protected $reservasiModel;
    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
    }

    public function index()
    {
        $data =     [
            'title' => 'Reservasi | Motamorph Coffee',
            'reservasi' => $this->reservasiModel->getReservasi()

        ];
        echo view('home/reservasi', $data);
    }
}
