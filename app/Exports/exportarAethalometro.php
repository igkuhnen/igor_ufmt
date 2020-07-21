<?php

namespace App\Exports;

use App\Aethalometro;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportarAethalometro implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Aethalometro::all();
    }
}
