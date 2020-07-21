<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\exportarPerfilSolo;
use App\Imports\importaPerfilSolo;
use App\Perfilsolo;
use Maatwebsite\Excel\Facades\Excel;

class ControladorImpExpPerfilSolo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ImpExpPerfilSoloView()
    {
        return view('importaPerfilSolo');
    }
    
    
    public function exporta() 
    {
        return Excel::download(new exportarPerfilSolo, 'PerfildeSolo.xlsx');
        
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importa() 
    {
        Excel::import(new importarPerfilSolo,request()->file('file'));
           
        return redirect('/perfilsolo');
    } 

    
}
