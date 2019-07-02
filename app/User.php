<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'ID';
    public $timestamps = true;


    protected $hidden = [
        'password', 'remember_token',
    ];
}
