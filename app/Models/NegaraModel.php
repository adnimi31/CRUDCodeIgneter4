<?php

namespace App\Models;

use CodeIgniter\Model;

class NegaraModel extends Model
{
    protected $table = 'negara';
    protected $primaryKey = 'id';
    protected $allowedFields = ['namanegara', 'kota'];

    public function search($keyword)
    {
        return $this->table('negara')->like('namanegara', $keyword)->orLike('kota', $keyword);
    }
}
