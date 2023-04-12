<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data =     [
            'title' => 'Home | MOTAMORPH COFFEE',
            'tes' => ['satu,dua,tiga']
        ];
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data =     [
            'title' => 'ABOUT'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Warakas 4 Gang 3 No 52',
                    'kota' => 'Jakarta'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Warakas Raya Gang 8 No 98',
                    'kota' => 'Jakarta'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    public function login()
    {
        $data =     [
            'title' => 'LOGIN'
        ];
        return view('admin', $data);
    }
}
