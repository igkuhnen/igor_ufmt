<?php

namespace App\Imports;

use App\Nephelometro;
use Maatwebsite\Excel\Concerns\ToModel;

class importaNephelometro implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Nephelometro([
            'dataNephelometro' => $row[0],
            'typeNephelometro' => $row[1],
            'coefNephelometro' => $row[2],
            'airtempNephelometro' => $row[3],
            'celltempNephelometro' => $row[4],
            'rhNephelometro' => $row[5],
            'pressureNephelometro' => $row[6],
        ]);
    }
}
