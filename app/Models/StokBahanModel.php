<?php

namespace App\Models;

use CodeIgniter\Model;

class StokBahanModel extends Model
{

  protected $table = 'bahan_baku';
  protected $useTimestamps = false;
  protected $allowedFields = [
    'name',
    'quantity',
    'satuan',
  ];

  public function getStokBahan($name = false)
  {
    if ($name == false) {
      return $this->findAll();
    }

    return $this->where(['name' => $name])->first();
  }
}
