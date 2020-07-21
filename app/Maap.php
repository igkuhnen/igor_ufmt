<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maap extends Model
{
    protected $table = "maap";
    
    
      protected $fillable = [
        'dateRpiMaap',
        'timeRpiMaap',
        'dateMaap',
        'timeMaap',
        'statusMaap',
        'concentrationofBCMaap',
        'massaofBCMaap',
        'airFlowRateMaap',
        'lastValueMaap',
        'meanof1hMaap',
        'meanof3hMaap',
        'meanof24hMaap',
    ];
}
