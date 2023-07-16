<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{

    protected $table = 'Rating';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_review',
        'id_order',
        'name',
        'rating',
        'pesan',
        'tanggal',
    ];

    // public function getRating($rating = false)
    // {
    //     if ($rating == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['Rating' => $rating])->first();
    // }

    public function getRating()
    {
        $builder = $this->table('rating');
        $builder->select('*');
        $builder->join('orders', 'rating.id_order = orders.id');
        $query = $builder->findAll();
        return $query;
    }
}
