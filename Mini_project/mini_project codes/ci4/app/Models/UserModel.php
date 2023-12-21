<?php
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model{
  protected $table = 'sample';
  protected $primaryKey = 'id';
  protected $allowedFields = ['name','email','password'];
}

?>