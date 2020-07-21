<?php

namespace App\Imports;

use App\Maap;
use Maatwebsite\Excel\Concerns\ToModel;

class importaMaap implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Maap([
            'dateRpiMaap' => $row[0],
            'timeRpiMaap'=> $row[1],
            'dateMaap' => $row[2],
            'timeMaap' => $row[3],
            'statusMaap' => $row[4],
            'concentrationofBCMaap' => $row[5],
            'massaofBCMaap' => $row[6],
            'airFlowRateMaap' => $row[7],
            'lastValueMaap' => $row[8],
            'meanof1hMaap' => $row[9],
            'meanof3hMaap' => $row[10],
            'meanof24hMaap' => $row[11],
        ]);
    }
}
