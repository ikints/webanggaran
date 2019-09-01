<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Anggaran extends Model
{
    protected $table = 'kode_pos';
    protected $primaryKey = 'pos_id';
    public $timestamps = false;
    protected $fillable = ['pos_id','subfung_parent_id','prog_parent_id','subprog_parent_id','giat_parent_id','output_parent_id','komp_parent_id','sub_komp_parent_id','pos_kode','pos_nama','pos_level'];


    protected $hidden = [];
}
