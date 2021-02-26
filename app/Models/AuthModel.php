<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = "admin";
    //protected $UseTimestamps = TRUE;
    protected $allowedFields = ['username', 'password'];

    public function getUsers($username)
    {
        if ($username == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $username])->first();
    }
}
