<?php

namespace App\Exports;

use App\Maap;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportarMaap implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Maap::all();
    }
}
