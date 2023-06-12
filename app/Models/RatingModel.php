<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{

    protected $table = 'Rating';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_rating',
        'name',
        'rating',
        'pesan',
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
