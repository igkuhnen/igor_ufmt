<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfilsolo extends Model
{
    protected $table = "perfilsolo";
    
    
      protected $fillable = [
        'datatime',
        'record',
        'BattV',
        'PTemp_C',
        'T108_C',
        'T108_C_2',
        'T108_C_3',
        'T108_C_4',
        'T108_C_5',
        'DiffVolt',
        'DiffVolt_2',
        'DiffVolt_3',
        'DiffVolt_4',
        'VW',
        'PA_uS',
        'VW_2',
        'PA_uS_2',
    ];
}
