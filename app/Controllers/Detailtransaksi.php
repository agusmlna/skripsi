<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Detailtransaksi extends BaseController
{
    protected $orderModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersbyid(session()->iduser)
        ];
        return view('home/Detailtransaksi', $data);
    }

    public function delete($id)
    {
        $this->orderModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('home/detailtransaksi');
    }
}
