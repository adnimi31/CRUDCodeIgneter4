<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['foto', 'nama', 'alamat', 'nohp'];

    public function search($keyword)
    {
        return $this->table('negara')->like('nama', $keyword)->orLike('alamat', $keyword)->orLike('nohp', $keyword);
    }
}
