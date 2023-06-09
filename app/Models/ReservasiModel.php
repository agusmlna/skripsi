<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{

    protected $table = 'Reservasi';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'nama_pemesan',
        'email',
        'no_telpon',
        'no_meja',
        'tanggal',
        'created_at'
    ];

    public function getReservasi($reservasi = false)
    {
        if ($reservasi == false) {
            return $this->findAll();
        }

        return $this->where(['Reservasi' => $reservasi])->first();
    }
}
