<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\OrderModel;
use App\Models\ReservasiModel;
use App\Models\StokBahanModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    protected $menuModel;
    protected $orderModel;
    protected $reservasiModel;
    protected $stokBahanModel;
    protected $userModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->orderModel = new OrderModel();
        $this->reservasiModel = new ReservasiModel();
        $this->stokBahanModel = new StokBahanModel();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data =     [
            'title' => 'Dashboard',
            'menu' => $this->menuModel->getMenu(),
            'orders' => $this->orderModel->getOrders(),
            'reservasi' => $this->reservasiModel->getReservasi(),
            'stokBahan' => $this->stokBahanModel->getStokBahan(),
            'User' => $this->userModel->getUser()
        ];
        echo view('admin/dashboard', $data);
    }
}
