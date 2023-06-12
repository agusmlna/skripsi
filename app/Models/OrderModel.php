<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{

    protected $table = 'orders';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'customer_name',
        'order_menu',
        'no_telpon',
        'total',
        'type_payment',
        'order_date'
    ];

    public function getOrders($orders = false)
    {
        if ($orders == false) {
            return $this->findAll();
        }

        return $this->where(['orders' => $orders])->first();
    }
}
