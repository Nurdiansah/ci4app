<?php

namespace App\Models;

use CodeIgniter\Model;

class KlubModel extends Model
{
    protected $table = 'klub';
    protected $primaryKey = 'id_klub';
    protected $useTimestamps = true;

    // protected $allowedFields = ['name', 'email'];

}
