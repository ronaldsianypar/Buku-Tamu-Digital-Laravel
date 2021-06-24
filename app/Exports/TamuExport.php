<?php

namespace App\Exports;

use App\Tamu;
use Maatwebsite\Excel\Concerns\FromCollection;

class TamuExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tamu::all();
    }
}
