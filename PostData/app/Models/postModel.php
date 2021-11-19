<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class postModel extends Model
{
    protected $table = 'uid';
    protected $primaryKey = 'id';
    protected $return = 'Json';
    protected $allowedFields = ['uid'];
}