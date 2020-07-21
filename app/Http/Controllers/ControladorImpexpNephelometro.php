<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\exportarNephelometro;
use App\Imports\importaNephelometro;
use App\Nephelometro;
use Maatwebsite\Excel\Facades\Excel;

class ControladorImpexpNephelometro extends Controller
{
    public function ImpExpNepheView()
    {
       return view('importaNephelometro');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exporta() 
    {
        return Excel::download(new exportarNephelometro, 'Nephelometro.xlsx');
        
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importa() 
    {
        Excel::import(new importaNephelometro,request()->file('file'));
           
        return redirect('/nephelometro');
    } 
}
