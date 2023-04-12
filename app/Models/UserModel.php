<?php

namespace App\Models;

use CodeIgniter\Model;

// untuk mengakses database admin di database
class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['id_kedai', 'email', 'password'];
    protected $useAutoIncrement  = true;
}
