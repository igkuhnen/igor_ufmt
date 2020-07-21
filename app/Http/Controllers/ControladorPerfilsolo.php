<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfilsolo;
use DB;

class ControladorPerfilsolo extends Controller
{
   
    
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->from_date))
      {
       $data = DB::table('perfilsolo')
         ->whereBetween('datatime', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::table('perfilsolo')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     return view('perfilsolo');
    }
}

?>