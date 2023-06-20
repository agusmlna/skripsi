<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data =     [
            'title' => 'LOGIN'
        ];
        return view('admin/dashboard', $data);
    }
}
