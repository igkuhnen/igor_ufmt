<?php

namespace App\Exports;

use App\Perfilsolo;
use Maatwebsite\Excel\Concerns\FromCollection;

class exportarPerfilSolo implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Perfilsolo::all();
    }
}
