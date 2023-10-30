<?php

namespace App\Controllers;

use App\Models\OrderModel;

class Pemilik extends BaseController
{
    protected $orderModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }
    public function index()
    {
        $data =     [
            'orders' => $this->orderModel->getOrders(),
        ];
        echo view('pemilik/pemilik', $data);
    }
    public function filter()
    {
        $firstDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-1')));
        $secondDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-2')));


        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersByRangeDate($firstDate, $secondDate)
        ];

        return view('pemilik/pemilik', $data);
    }

    public function filterandstatus()
    {
        $firstDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-1')));
        $secondDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-2')));


        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersByRangeDateandStatus($firstDate, $secondDate)
        ];

        return view('pemilik/pemilik', $data);
    }

    public function filterandstatuspembayaran()
    {
        $firstDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-1')));
        $secondDate = date("Y-m-d H:i:s", strtotime($this->request->getVar('tanggal-2')));


        $data = [
            'title' => 'Daftar Order',
            'orders' => $this->orderModel->getOrdersByRangeDateandStatus($firstDate, $secondDate)
        ];

        return view('pemilik/pemilik', $data);
    }
}
