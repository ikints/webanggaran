<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AnggaranTemp extends Model
{
    protected $table = 'kode_pos_temp';
    protected $primaryKey = 'pos_id';
    public $timestamps = false;
    protected $fillable = ['pos_id','pos_id_tahun','pos_template','pos_parent_kode','pos_kode','pos_nama','pos_level','pos_volume','pos_jumlah'];


    protected $hidden = [];
}
