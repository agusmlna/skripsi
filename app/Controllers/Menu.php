<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\StokBahanModel;

class Menu extends BaseController
{
    protected $menuModel;
    protected $stokBahanModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->stokBahanModel = new StokBahanModel();
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
            'menu' => $this->menuModel->getMenu($menu),
        ];
        return view('menu/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Menu',
            'bahanBaku' => $this->stokBahanModel->getStokBahan(),
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

        $idBahan1 = $this->request->getVar('id-bahan-1');
        $idBahan2 = $this->request->getVar('id-bahan-2');
        $idBahan3 = $this->request->getVar('id-bahan-3');

        $namaBahan1 = $this->request->getVar('nama-bahan-1');
        $namaBahan2 = $this->request->getVar('nama-bahan-2');
        $namaBahan3 = $this->request->getVar('nama-bahan-3');

        $quantity1 = $this->request->getVar('quantity-1');
        $quantity2 = $this->request->getVar('quantity-2');
        $quantity3 = $this->request->getVar('quantity-3');

        // $arr = array(
        //     array(
        //         'id_bahan' => intval($idBahan1),
        //         'name' => $namaBahan1,
        //         'quantity' => intval($quantity1),
        //     ),
        //     array(
        //         'id_bahan' => intval($idBahan2),
        //         'name' => $namaBahan2,
        //         'quantity' => intval($quantity2),
        //     ),
        //     array(
        //         'id_bahan' => intval($idBahan3),
        //         'name' => $namaBahan3,
        //         'quantity' => intval($quantity3),
        //     ),
        // );

        $arr = array();

        if ($idBahan1 != '') {
            $data = array(
                'id_bahan' => intval($idBahan1),
                'name' => $namaBahan1,
                'quantity' => intval($quantity1),
            );
            array_push($arr, $data);
        }
        if ($idBahan2 != '') {
            $data = array(
                'id_bahan' => intval($idBahan2),
                'name' => $namaBahan2,
                'quantity' => intval($quantity2),
            );
            array_push($arr, $data);
        }
        if ($idBahan3 != '') {
            $data = array(
                'id_bahan' => intval($idBahan3),
                'name' => $namaBahan3,
                'quantity' => intval($quantity3),
            );
            array_push($arr, $data);
        }



        $this->menuModel->save([
            'menu' => $this->request->getVar('menu'),
            'harga' => $this->request->getVar('harga'),
            'sampul' => $namaFotoProduk,
            'tipe' => $this->request->getVar('tipe'),
            'recipe' => json_encode($arr)
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
