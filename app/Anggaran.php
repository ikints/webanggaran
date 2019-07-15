<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Anggaran extends Model
{
    protected $table = 'anggaran';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = ['ID','kode','parent','uraian'];


    protected $hidden = [];
}
