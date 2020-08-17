<?php

namespace App\Models;

use CodeIgniter\Model;

class KlubModel extends Model
{
    protected $table = 'klub';
    protected $primaryKey = 'id_klub';
    protected $useTimestamps = true;

    // protected $allowedFields = ['name', 'email'];

    public function getKlub($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_klub' => $id])->first();
    }
}
