<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nephelometro;

class ControladorNephelometro extends Controller
{
    
    public function __construct() {
        $this->middleware('auth'); 
    }
    
    public function index()
    {
        $cats = Nephelometro::paginate(20);
        return view('nephelometro', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novonephelometro');
    }
    
    public function store(Request $request)
    {
        $cat = new Nephelometro();
        $cat->dataNephelometro = $request->input('dataNephelometro');
        $cat->typeNephelometro = $request->input('typeNephelometro');
        $cat->coefNephelometro = $request->input('coefNephelometro');
        $cat->airtempNephelometro = $request->input('airtempNephelometro');
        $cat->celltempNephelometro = $request->input('celltempNephelometro');
        $cat->rhNephelometro = $request->input('rhNephelometro');
        $cat->pressureNephelometro = $request->input('pressureNephelometro');
        $cat->save();
        return redirect('/nephelometro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Nephelometro::find($id);
        if(isset($cat)) {
            return view('editarnephelometro', compact('cat'));
        }
        return redirect('/nephelometro');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = Nephelometro::find($id);
        if(isset($cat)) {
            $cat->dataNephelometro = $request->input('dataNephelometro');
            $cat->typeNephelometro = $request->input('typeNephelometro');
            $cat->coefNephelometro = $request->input('coefNephelometro');
            $cat->airtempNephelometro = $request->input('airtempNephelometro');
            $cat->celltempNephelometro = $request->input('celltempNephelometro');
            $cat->rhNephelometro = $request->input('rhNephelometro');
            $cat->pressureNephelometro = $request->input('pressureNephelometro');
            $cat->save();
        }
        return redirect('/nephelometro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Nephelometro::find($id);
        if (isset($cat)) {
            $cat->delete();
        }
        return redirect('/nephelometro');
    }

    public function indexJson()
    {
        $cats = Nephelometro::all();
        return json_encode($cats);
    }
}