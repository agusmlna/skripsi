<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Order2 extends BaseController
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
            'orders' => $this->orderModel->getOrders()
        ];

        return view('Order/index', $data);
    }

    public function save()
    {
        // data variabel berasal dari input file
        $buktipembayaran = $this->request->getFile('bukti-pembayaran');
        // pindahkan ke folder image
        $buktipembayaran->move('img');
        // ambil nama file fotoProduk
        $buktipembayaran = $buktipembayaran->getName();

        if ($this->request->getVar('CustomerName') == "") {
            session()->setFlashdata('pesan', 'Nama Kosong');
        } else if (
            $this->request->getVar('menuOrder') == "" ||
            $this->request->getVar('menuOrder') == []
        ) {
            session()->setFlashdata('pesan', 'order Kosong');
        } else {
            $this->orderModel->save([
                'id_user' => session()->iduser,
                'customer_name' => $this->request->getVar('CustomerName'),
                'order_menu' => $this->request->getVar('menuOrder'),
                'total' => $this->request->getVar('total'),
                'type_payment' => $this->request->getVar('type-payment'),
                'buktibayar' => $buktipembayaran,
                'order_date' => date('Y/m/d H:i:s'),
            ]);
        }

        return redirect()->to('home/pesan-produk');
    }
}
