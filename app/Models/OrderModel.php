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
        'order_date',
        'bayar',
        'kembalian'
    ];

    public function getOrders($orders = false)
    {
        if ($orders == false) {
            return $this->findAll();
        }

        return $this->where(['orders' => $orders])->first();
    }

    public function getOrderById($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function getOrdersByUserId($id_user)
    {
        return $this->where(['id_user' => $id_user])->findAll();
    }

    public function changeStatus($id)
    {
        return $this->update($id, [
            'status' => 'Sukses'
        ]);
    }

    public function getOrdersbystatus()
    {
        return $this->where(['status' => 'sukses'])->findAll();
    }

    public function getOrdersByRangeDate($firstDate, $secondDate)
    {
        return $this->where("order_date BETWEEN '{$firstDate}' AND '{$secondDate}'")->findAll();
    }

    public function getOrdersByRangeDateandStatus($firstDate, $secondDate)
    {
        return $this->where("order_date BETWEEN '{$firstDate}' AND '{$secondDate}' AND status='Sukses'")->findAll();
    }
}
