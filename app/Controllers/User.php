<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function kelolakostumer()
    {
        $data = [
            'title' => 'Daftar User',
            'User' => $this->userModel->getUser()
        ];


        return view('admin/kelolakostumer', $data);
    }

    public function save()
    {
        $date = strtotime($this->request->getVar('tanggal'));
        $this->userModel->save([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'no_telpon' => $this->request->getVar('no_telpon'),
        ]);

        return redirect()->to('home/user');
    }
}
