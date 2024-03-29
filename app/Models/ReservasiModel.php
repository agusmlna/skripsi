<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{

    protected $table = 'Reservasi';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_user',
        'nama_pemesan',
        'email',
        'no_telpon',
        'no_meja',
        'tanggal',
        'jam',
        'status',
        'created_at'
    ];

    public function getReservasi($reservasi = false)
    {
        if ($reservasi == false) {
            return $this->findAll();
        }

        return $this->where(['reservasi' => $reservasi])->first();
    }

    public function getReservasibyid($id_user)
    {
        return $this->where(['id_user' => $id_user])->findAll();
    }

    public function getReservasiByRangeDate($firstDate, $secondDate)
    {
        return $this->where("tanggal BETWEEN '{$firstDate}' AND '{$secondDate}'")->findAll();
    }

    public function getReservasiByUserId($id_user)
    {
        return $this->where(['id_user' => $id_user])->findAll();
    }

    public function changeStatus($id)
    {
        return $this->update($id, [
            'status' => 'Sukses'
        ]);
    }
}
