<?php

namespace App\Models;

use CodeIgniter\Model;

class log_model extends Model
{
    protected $table = 'log_table';
    protected $primaryKey = 'id';
    protected $updatedField  = 'updated_at'; 
    protected $allowedFields = ['old_value', 'updated_at','created_at'];
    protected $useTimestamps = true;
}
