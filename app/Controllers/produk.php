<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\StokBahanModel;

class Produk extends BaseController
{
    public function index()
    {
        // fetch bahan baku
        $stokBahanModel = new StokBahanModel();
        $stokBahan = $stokBahanModel->findAll();

        // fetch resep
        $menuModel = new MenuModel();
        $menu = $menuModel->findAll();

        $data = [
            'title' => 'Pesan | Motamorph Coffee',
            'stokBahan' => $stokBahan,
            'menu' => $menu,
        ];

        echo view('home/pesan-produk', $data);
    }

    public function buy($idMenu)
    {
        $menuModel = new MenuModel();
        $stokBahanModel = new StokBahanModel();
        $session = session();
        $listQuantity = [];

        // fetch resep by id
        $menu = $menuModel->where('id', $idMenu)->first();

        // fungsi untuk mencari data didalam list
        // jika data kurang dari nol atau negative
        // return false, jika tidak return true
        function arrayEvery($list)
        {
            foreach ($list as $item) {
                if ($item < 0) {
                    return false;
                }
            }
            return true;
        }

        foreach (json_decode($menu['recipe']) as $res) {
            $bahanBaku = $stokBahanModel->find($res->id_bahan);
            array_push($listQuantity, $bahanBaku['quantity'] - $res->quantity);
        }

        $isCanUpdateData = arrayEvery($listQuantity);
        if ($isCanUpdateData) {
            foreach (json_decode($menu['recipe']) as $res) {
                $bahanBaku = $stokBahanModel->find($res->id_bahan);

                $stokBahanModel->set('quantity', $bahanBaku['quantity'] - $res->quantity);
                $stokBahanModel->where('id', $res->id_bahan)->update();

                $session->setFlashdata("success", "Berhasil beli");
            }
        } else {
            $session->setFlashdata("danger", "stok habis");
        }

        return redirect()->to(base_url('home/pesan-produk'));
    }
}
