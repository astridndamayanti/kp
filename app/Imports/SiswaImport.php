<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
            return new Rombel([
                'nis' => $row[0],
                'nama' => $row[1],
                'rayon_id' => $row[2],
                'rombel_id' => $row[3],
                'jk' => $row[4],
                'user_id' => $row[5],
            ]);
    }
}
