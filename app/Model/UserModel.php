<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $table = 'p_api_users';
    protected $primaryKey = 'id';
}
