<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nephelometro extends Model
{
    protected $table = "nephelometro";
    
    
      protected $fillable = [
        'dataNephelometro',
        'typeNephelometro',
        'coefNephelometro',
        'airtempNephelometro',
        'celltempNephelometro',
        'rhNephelometro',
        'pressureNephelometro',
    ];
}
