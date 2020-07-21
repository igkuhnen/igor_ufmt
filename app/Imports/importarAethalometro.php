<?php

namespace App\Imports;

use App\Aethalometro;
use Maatwebsite\Excel\Concerns\ToModel;

class importaAethalometro implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aethalometro([
           'DateRpi' => $row[0],
           'TimeRpi' => $row[1],
           'conc370' => $row[2],
           'conc470' => $row[3],
           'conc520' => $row[4],
           'conc590' => $row[5],
           'conc660' => $row[6],
           'conc880' => $row[7],
           'conc950' => $row[8],
           'vflow' => $row[9],
           'sz370' => $row[10],
           'sb370' => $row[11],
           'rz370' => $row[12],
           'rb370' => $row[13],
           'fraction370' => $row[14],
           'attenuation370' => $row[15],
           'sz470' => $row[16],
           'sb470' => $row[17],
           'rz470' => $row[18],
           'rb470' => $row[19],
           'fraction470' => $row[20],
           'attenuation470' => $row[21],
           'sz520' => $row[22],
           'sb520' => $row[23],
           'rz520' => $row[24],
           'rb520' => $row[25],
           'fraction520' => $row[26],
           'attenuation520' => $row[27],
           'sz590' => $row[28],
           'sb590' => $row[29],
           'rz590' => $row[30],
           'rb590' => $row[31],
           'fraction590' => $row[32],
           'attenuation590' => $row[33],
           'sz660' => $row[34],
           'sb660' => $row[35],
           'rz660' => $row[36],
           'rb660' => $row[37],
           'fraction660' => $row[38],
           'attenuation660' => $row[39],
           'sz880' => $row[40],
           'sb880' => $row[41],
           'rz880' => $row[42],
           'rb880' => $row[43],
           'fraction880' => $row[44],
           'attenuation880' => $row[45],
           'sz950' => $row[46],
           'sb950' => $row[47],
           'rz950' => $row[48],
           'rb950' => $row[49],
           'fraction950' => $row[50],
           'attenuation950' => $row[51],
        ]);
    }
}
