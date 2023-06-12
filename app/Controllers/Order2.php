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
            // 'order' => $this->orderModel->getOrder()
        ];


        return view('Order/index', $data);
    }

    // public function save()
    // {
    //     $date = strtotime($this->request->getVar('tanggal'));
    //     $this->orderModel->save([
    //         'nama_pemesan' => "{$this->request->getVar('nama_depan_pemesan')} {$this->request->getVar('nama_belakang_pemesan')}",
    //         'email' => $this->request->getVar('email'),
    //         'no_telpon' => $this->request->getVar('no_telpon'),
    //         'no_meja' => $this->request->getVar('meja'),
    //         'tanggal' => date('Y/m/d H:i:s', $date)
    //     ]);

    //     return redirect()->to('home/reservasi');
    // }
}
