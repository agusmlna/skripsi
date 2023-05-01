<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{

    protected $table = 'Menu';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'menu',
        'harga',
        'sampul',
        'tipe',
        'recipe',
        'created_at'
    ];

    public function getMenu($menu = false)
    {
        if ($menu == false) {
            return $this->findAll();
        }

        return $this->where(['menu' => $menu])->first();
    }
}
