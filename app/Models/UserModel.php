<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $useTimestamps = false;
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'email', 'no_telpon', 'password'];
    protected $useAutoIncrement  = true;

    public function getUSer($user = false)
    {
        if ($user == false) {
            return $this->findAll();
        }

        return $this->where(['user' => $user])->first();
    }
}
