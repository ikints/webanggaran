<?php

namespace App\Imports;

use App\Anggaran;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;

class AnggaranImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Anggaran([
            'kode'     => $row[1],
            'parent'    => $row[2], 
            'uraian' => $row[3],
        ]);
    }
}
