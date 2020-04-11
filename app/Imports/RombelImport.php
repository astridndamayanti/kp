<?php

namespace App\Imports;

use App\Rombel;
use Maatwebsite\Excel\Concerns\ToModel;

class RombelImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            return new Rombel([
                'rombel' => $row[0],
                'thn_ajaran' => $row[1],
                'slug' => $row[2],
            ]);
    }
}
