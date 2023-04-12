<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }
    public function index()
    {
        //$menu = $this->menuModel->findAll();

        $data = [
            'title' => 'Daftar Menu',
            'menu' => $this->menuModel->getMenu()
        ];

        // $menuModel = new \App\Models\MenuModel();
        // $menuModel = new MenuModel();

        return view('menu/index', $data);
    }


    public function detail($menu)
    {
        $data = [
            'title' => 'Detail Menu',
            'menu' => $this->menuModel->getMenu($menu)
        ];
        return view('menu/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Menu',
            'validation' => \Config\Services::validation()
        ];

        return view('menu/create', $data);
    }

    public function save()
    {
        // //validasi input
        // if (!$this->validate([
        //     'menu' => 'required|is_unique[menu.menu]',
        //     'sampul' => 'uploaded[sampul]'
        // ])) {
        //     // $validation = \Config\Services::validation();
        //     // dd($validation->listErrors());
        //     // return redirect()->to('/menu/create')->withInput()->with('validation', $validation);
        //     return redirect()->to('/menu/create')->withInput();
        // }

        // data variabel berasal dari input file
        $fotoProduk = $this->request->getFile('foto-produk');
        // pindahkan ke folder image
        $fotoProduk->move('img');
        // ambil nama file fotoProduk
        $namaFotoProduk = $fotoProduk->getName();

        $this->menuModel->save([
            'menu' => $this->request->getVar('menu'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $namaFotoProduk,
            'tipe' => $this->request->getVar('tipe')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('admin/menu');
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('admin/menu');
    }

    public function edit($menu)
    {
        
        $data = [
            'title' => 'Form Ubah Data Menu',
            'validation' => \Config\Services::validation(),
            'menu' => $this->menuModel->getMenu($menu)
        ];

        return view('menu/edit', $data);
    }

    public function update($id)
    {

        $this->menuModel->save([
            'id' => $id,
            'menu' => $this->request->getVar('menu'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $this->request->getVar('sampul'),
            'tipe' => $this->request->getVar('tipe')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('admin/menu');
    }
}
