<?php

namespace App\Controllers;

use App\Models\ReservasiModel;

class Detailreservasi extends BaseController
{
    protected $reservasiModel;
    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Order',
            'reservasi' => $this->reservasiModel->getReservasibyid(session()->iduser)
        ];
        return view('home/detailreservasi', $data);
    }

    public function delete($id)
    {
        $this->reservasiModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('home/detailreservasi');
    }
}
