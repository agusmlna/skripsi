<?php

namespace App\Controllers;

use App\Models\ReservasiModel;

class Reservasi extends BaseController
{
    protected $reservasiModel;
    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Reservasi',
            'reservasi' => $this->reservasiModel->getReservasi()
        ];


        return view('Reservasi/index', $data);
    }

    public function save()
    {
        $date = strtotime($this->request->getVar('tanggal'));
        $this->reservasiModel->save([
            'id_user' => session()->iduser,
            'nama_pemesan' => "{$this->request->getVar('nama_depan_pemesan')} {$this->request->getVar('nama_belakang_pemesan')}",
            'email' => $this->request->getVar('email'),
            'no_telpon' => $this->request->getVar('no_telpon'),
            'no_meja' => $this->request->getVar('meja'),
            'status' => 'Di Proses',
            'jam' => $this->request->getVar('jam'),
            'tanggal' => date('Y/m/d H:i:s', $date)
        ]);

        return redirect()->to('home/reservasi');
    }

    public function sukses($id)
    {
        $this->reservasiModel->changeStatus($id);
        return redirect()->to('admin/reservasi');
    }

    public function filter()
    {
        $firstDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-1')));
        $secondDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-2')));

        $data = [
            'title' => 'Daftar Reservasi',
            'reservasi' => $this->reservasiModel->getReservasiByRangeDate($firstDate, $secondDate)
        ];

        return view('Reservasi/index', $data);
    }
}
