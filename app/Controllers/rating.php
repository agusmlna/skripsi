<?php

namespace App\Controllers;

use App\Models\RatingModel;

class Rating extends BaseController
{
    protected $ratingModel;
    public function __construct()
    {
        $this->ratingModel = new RatingModel();
    }
    public function index()
    {
        $data =     [
            'title' => 'Home | MOTAMORPH COFFEE',
            'tes' => ['satu,dua,tiga'],
            'rating' => $this->ratingModel->getRating(),

        ];
        echo view('home/rating', $data);
    }



    public function save()
    {

        $this->ratingModel->save([
            'name' => $this->request->getVar('name'),
            'rating' => $this->request->getVar('rating'),
            'pesan' => $this->request->getVar('pesan'),
            'tanggal' => date('Y/m/d H:i:s')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('home/rating');
    }
}
