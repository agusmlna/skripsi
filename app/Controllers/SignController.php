<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\PemilikModel;

class SignController extends BaseController
{

    //menampilkan halaman sign in
    public function index()
    {
        $data = [
            'title' => 'Login | Motamorph Coffee'
        ];
        return view('sign/sign-in', $data);
    }

    //proses sign in
    public function processLogin()
    {
        $userModel = new UserModel();
        $adminModel = new AdminModel();
        $pemilikModel = new PemilikModel();
        //get data from form
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email', $email)->first();

        function loginSuccessUser($data)
        {
            $ses_data = [
                'iduser' => $data['id_user'],
                'username' => $data['username'],
            ];
            session()->set($ses_data);
        }

        function loginSuccessAdmin($data)
        {
            $ses_data = [
                'idadmin' => $data['id_admin'],
                'email' => $data['email'],
            ];
            session()->set($ses_data);
        }

        function loginSuccessPemilik($data)
        {
            $ses_data = [
                'idpemilik' => $data['id_pemilik'],
                'email' => $data['email'],
            ];
            session()->set($ses_data);
        }


        //check if email user exist
        if ($data) {
            //check if password is correct
            $pass = $data['password'];
            if ($password == $pass) {
                loginSuccessUser($data);
                return redirect()->to(base_url('/home'));
            } else {
                session()->setFlashdata('pesan', 'Login Gagal');
                return redirect()->to('/login');
            }
        } else {
            // admin check
            $data = $adminModel->where('email', $email)->first();
            if ($data) {
                $pass = $data['PASSWORD'];
                if ($password == $pass) {
                    // dd('sucess');
                    loginSuccessAdmin($data);
                    return redirect()->to('/admin');
                } else {
                    session()->setFlashdata('pesan', 'Login Gagal');
                    return redirect()->to('/login');
                }
            } else {
                $data = $pemilikModel->where('email', $email)->first();
                if ($data) {
                    $pass = $data['password'];
                    if ($password == $pass) {
                        // dd('sucess');
                        loginSuccessPemilik($data);
                        return redirect()->to('/pemilik');
                    } else {
                        session()->setFlashdata('pesan', 'Login Gagal');
                        return redirect()->to('/login');
                    }
                }
            }
        }
    }



    // menampilkan halaman sign up
    public function regist()
    {
        $db = \Config\Database::connect();
        $data = [
            'title' => 'Register | MotaMorph '
        ];
        return view('sign/sign-up', $data);
    }

    public function processRegist()
    {
        $userModel = new UserModel();
        // check if email already exist
        $checkemail = $userModel->where('email', $this->request->getVar('email'))->first();

        if ($checkemail) {
            session()->setFlashdata('pesan', 'Email already exist');
            return redirect()->to('/regist');
        }

        $datauser = [
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'no_telpon' => $this->request->getVar('no_telpon'),
            'password' => $this->request->getVar('password')
        ];
        // insert data user to User table
        $userModel->insert($datauser);
        session()->setFlashdata('pesan', 'Register Success');
        return redirect()->to('/login');
    }

    //logout
    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('pesan', 'Logout Success');
        return redirect()->to('/login')->with('pesan', 'Logout Success');
    }
}
