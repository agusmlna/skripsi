<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{

    protected $table = 'orders';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'id_user',
        'customer_name',
        'order_menu',
        'no_telpon',
        'status',
        'total',
        'type_payment',
        'buktibayar',
        'order_date'
    ];

    public function getOrders($orders = false)
    {
        if ($orders == false) {
            return $this->findAll();
        }

        return $this->where(['orders' => $orders])->first();
    }

    public function getOrdersbyid($id_user)
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
