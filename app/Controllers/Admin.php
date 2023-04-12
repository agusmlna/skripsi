<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login()
    {
        $data =     [
            'title' => 'LOGIN'
        ];
        return view('pages/adminlogin', $data);
    }
}
