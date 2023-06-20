<?php

namespace App\Controllers;

use App\Models\MenuModel;


class Dashboard extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }
    public function index()
    {
        $data =     [
            'title' => 'Dashboard',
            'menu' => $this->menuModel->getMenu()
        ];
        echo view('admin/dashboard', $data);
    }
}
