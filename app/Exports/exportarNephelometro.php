<?php

namespace App\Exports;

use App\Nephelometro;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportarNephelometro implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Nephelometro::all();
    }
}
