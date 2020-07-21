<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\exportarMaap;
use App\Imports\importaMaap;
use App\Maap;
use Maatwebsite\Excel\Facades\Excel;

class ControladorImpExpMaap extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ImpExpMaapView()
    {
        return view('importaMaap');
    }
    
    
    public function exporta() 
    {
        return Excel::download(new exportarMaap, 'Maap.xlsx');
        
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importa() 
    {
        Excel::import(new importarMaap,request()->file('file'));
           
        return redirect('/maap');
    } 

    
}
