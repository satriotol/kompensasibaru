<?php

namespace App\Imports;

use App\datamahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class datamahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new datamahasiswa([
            'foto' => $row[1],
            'nama' => $row[2], 
            'kelas' => $row[3],
            'alamat' => $row[4],
            'sakit' => $row[5],
            'ijin' => $row[6],
            'alpha' => $row[7],
        ]);
    }
}