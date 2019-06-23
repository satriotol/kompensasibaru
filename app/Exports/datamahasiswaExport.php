<?php

namespace App\Exports;

use App\datamahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class datamahasiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return datamahasiswa::all();
    }
}