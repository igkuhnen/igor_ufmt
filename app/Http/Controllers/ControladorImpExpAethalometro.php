<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\exportarAethalometro;
use App\Imports\importaAethalometro;
use App\Aethalometro;
use Maatwebsite\Excel\Facades\Excel;

class ControladorImpExpAethalometro extends Controller
{
    
    public function __construct() {
        $this->middleware('auth'); 
    }
    
    public function ImpExpaAethaView()
    {
        return view('importaAethalometro');
    }
    
    
    public function exporta() 
    {
        return Excel::download(new exportarAethalometro, 'Aethalometro.xlsx');
        
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importa() 
    {
        Excel::import(new importarAethalometro,request()->file('file'));
           
        return redirect('/aethalometro');
    } 

    
}
