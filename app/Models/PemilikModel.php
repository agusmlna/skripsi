<?php

namespace App\Models;

use CodeIgniter\Model;

// untuk mengakses database admin di database
class PemilikModel extends Model
{
    protected $table = 'pemilik';
    protected $primaryKey = 'id_pemilik';
    protected $allowedFields = ['email', 'PASSWORD'];
    protected $useAutoIncrement  = true;
}
