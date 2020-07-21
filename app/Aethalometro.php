<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aethalometro extends Model
{
    protected $table = "aethalometro";
    
    
      protected $fillable = [
            'DateRpi','TimeRpi',
            'conc370','conc470','conc520','conc590','conc660','conc880','conc950','vflow',
            'sz370','sb370','rz370','rb370','fraction370','attenuation370',
            'sz470','sb470','rz470','rb470','fraction470','attenuation470',
            'sz520','sb520','rz520','rb520','fraction520','attenuation520',
            'sz590','sb590','rz590','rb590','fraction590','attenuation590',
            'sz660','sb660','rz660','rb660','fraction660','attenuation660',
            'sz880','sb880','rz880','rb880','fraction880','attenuation880',
            'sz950','sb950','rz950','rb950','fraction950','attenuation950',
    ];
}
