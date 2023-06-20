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

  public function detail($stokBahan)
  {
    $data = [
      'title' => 'Detail Bahan Baku',
      'stokBahan' => $this->stokBahanModel->getStokBahan($stokBahan),
    ];
    return view('StokBahan/detail', $data);
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
      'satuan' => $this->request->getVar('satuan')
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

    return redirect()->to('admin/stok-bahan');
  }

  public function edit($stokBahan)
  {

    $data = [
      'title' => 'Form Ubah Data Stok Bahan',
      'validation' => \Config\Services::validation(),
      'stokBahan' => $this->stokBahanModel->getStokBahan($stokBahan)
    ];

    return view('StokBahan/edit', $data);
  }

  public function update($id)
  {
    $this->stokBahanModel->save([
      'id' => $id,
      'name' => $this->request->getVar('name'),
      'quantity' => $this->request->getVar('quantity'),
      'satuan' => $this->request->getVar('satuan')
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil diubah.');

    return redirect()->to('admin/stok-bahan');
  }
}
