<?php

namespace App\Imports;

use App\Perfilsolo;
use Maatwebsite\Excel\Concerns\ToModel;

class importarPerfilSolo implements ToModel
{
   
    public function model(array $row)
    {
        return new Perfilsolo([
            'datatime' => $row[0],
            'record' => $row[1],
            'BattV' => $row[2],
            'PTemp_C' => $row[3],
            'T108_C' => $row[4],
            'T108_C_2' => $row[5],
            'T108_C_3' => $row[6],
            'T108_C_4' => $row[7],
            'T108_C_5' => $row[8],
            'DiffVolt' => $row[9],
            'DiffVolt_2' => $row[10],
            'DiffVolt_3' => $row[11],
            'DiffVolt_4' => $row[12],
            'VW' => $row[13],
            'PA_uS' => $row[14],
            'VW_2' => $row[15],
            'PA_uS_2'=> $row[16],
        ]);
    }
}
