<?php

namespace App\Controllers;

use App\Models\StokBahanModel;

class StokBahan extends BaseController
{
  protected $stokBahanModel;
  public function __construct()
  {
    $this->stokBahanModel = new StokBahanModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Daftar Stok Bahan',
      'stokBahan' => $this->stokBahanModel->getStokBahan()
    ];


    return view('StokBahan/index', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Form Tambah Stok Bahan Baku',
      'validation' => \Config\Services::validation()
    ];

    return view('StokBahan/create', $data);
  }

  public function save()
  {
    $this->stokBahanModel->save([
      'name' => $this->request->getVar('name'),
      'quantity' => $this->request->getVar('quantity'),
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

    return redirect()->to('admin/stok-bahan');
  }
}
