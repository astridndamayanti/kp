<?php

namespace App\Imports;

use App\Rayon;
use Maatwebsite\Excel\Concerns\ToModel;

class RayonImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Rayon([
            'rayon' => $row[0],
            'pembimbing' => $row[1],
            'thn_ajaran' => $row[2],
        ]);
    }
}
