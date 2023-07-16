<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\StokBahanModel;

class Order2 extends BaseController
{
    protected $orderModel;
    protected $stokBahanModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->stokBahanModel = new StokBahanModel();
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
        $bayar = 0;
        // data variabel berasal dari input file
        $buktipembayaran = $this->request->getFile('bukti-pembayaran');
        if (file_exists($buktipembayaran)) {
            $bayar = $this->request->getVar('total');
            // pindahkan ke folder image
            $buktipembayaran->move('img');
            // ambil nama file fotoProduk
            $buktipembayaran = $buktipembayaran->getName();
        }

        if ($this->request->getVar('CustomerName') == "") {
            session()->setFlashdata('pesan', 'Nama Kosong');
        } else if (
            $this->request->getVar('menuOrder') == "" ||
            $this->request->getVar('menuOrder') == []
        ) {
            session()->setFlashdata('pesan', 'order Kosong');
        } else {
            date_default_timezone_set('Asia/Jakarta');

            $orderDate = date("Y-m-d H:i:s");

            $this->orderModel->save([
                'id_user' => session()->iduser,
                'customer_name' => $this->request->getVar('CustomerName'),
                'order_menu' => $this->request->getVar('menuOrder'),
                'total' => $this->request->getVar('total'),
                'type_payment' => $this->request->getVar('type-payment'),
                'buktibayar' => $buktipembayaran,
                'bayar' => $bayar,
                'order_date' => $orderDate,
                'status' => 'Di Proses'
            ]);
            $a = json_decode($this->request->getVar('input-stok'));
            for ($i = 0; $i < count($a); $i++) {
                $data = [
                    'quantity' =>  $a[$i]->quantity
                ];
                $this->stokBahanModel->update($a[$i]->id, $data);
            }
        }

        return redirect()->to('home/pesan-produk');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Pembayaran',
            'order' => $this->orderModel->getOrderById($id),
        ];
        return view('order/detail', $data);
    }

    public function sukses($id)
    {
        $this->orderModel->changeStatus($id);
        return redirect()->to('admin/order');
    }

    public function laporanpenjualan()
    {
        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersbystatus()
        ];

        return view('Order/laporanpenjualan', $data);
    }

    public function laporanpembayaran()
    {
        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersbystatus()
        ];

        return view('Order/laporanpembayaran', $data);
    }

    public function savePayment($id)
    {
        $this->orderModel->update($id, [
            'bayar' => $this->request->getVar('bayar'),
            'kembalian' => $this->request->getVar('kembalian')
        ]);
        return redirect()->to('admin/order');
    }

    public function filter()
    {
        $firstDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-1')));
        $secondDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-2')));


        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersByRangeDate($firstDate, $secondDate)
        ];

        return view('Order/index', $data);
    }

    public function filterandstatus()
    {
        $firstDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-1')));
        $secondDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-2')));


        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersByRangeDateandStatus($firstDate, $secondDate)
        ];

        return view('Order/laporanpenjualan', $data);
    }

    public function filterandstatuspembayaran()
    {
        $firstDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-1')));
        $secondDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-2')));


        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersByRangeDateandStatus($firstDate, $secondDate)
        ];

        return view('Order/laporanpembayaran', $data);
    }
}
