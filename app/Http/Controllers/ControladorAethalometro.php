<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aethalometro;

class ControladorAethalometro extends Controller
{
    
    public function __construct() {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $cats = Aethalometro::paginate(20);
        return view('aethalometro', compact(['cats']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoaethalometro');
    }
    
    public function store(Request $request)
    {
        $cat = new Aethalometro();
        $cat->DateRpi = $request->input('DateRpi');
        $cat->TimeRpi = $request->input('TimeRpi');
        $cat->conc370 = $request->input('conc370');
        $cat->conc470 = $request->input('conc470');
        $cat->conc520 = $request->input('conc520');
        $cat->conc590 = $request->input('conc590');
        $cat->conc660 = $request->input('conc660');
        $cat->conc880 = $request->input('conc880');
        $cat->conc950 = $request->input('conc950');
        $cat->vflow = $request->input('vflow');
        $cat->sz370 = $request->input('sz370');
        $cat->sb370 = $request->input('sb370');
        $cat->rz370 = $request->input('rz370');
        $cat->rb370 = $request->input('rb370');
        $cat->fraction370 = $request->input('fraction370');
        $cat->attenuation370 = $request->input('attenuation370');
        $cat->sz470 = $request->input('sz470');
        $cat->sb470 = $request->input('sb470');
        $cat->rz470 = $request->input('rz470');
        $cat->rb470 = $request->input('rb470');
        $cat->fraction470 = $request->input('fraction470');
        $cat->attenuation470 = $request->input('attenuation470');
        $cat->sz520 = $request->input('sz520');
        $cat->sb520 = $request->input('sb520');
        $cat->rz520 = $request->input('rz520');
        $cat->rb520 = $request->input('rb520');
        $cat->fraction520 = $request->input('fraction520');
        $cat->attenuation520 = $request->input('attenuation520');
        $cat->sz590 = $request->input('sz590');
        $cat->sb590 = $request->input('sb590');
        $cat->rz590 = $request->input('rz590');
        $cat->rb590 = $request->input('rb590');
        $cat->fraction590 = $request->input('fraction590');
        $cat->attenuation590 = $request->input('attenuation590');
        $cat->sz660 = $request->input('sz660');
        $cat->sb660 = $request->input('sb660');
        $cat->rz660 = $request->input('rz660');
        $cat->rb660 = $request->input('rb660');
        $cat->fraction660 = $request->input('fraction660');
        $cat->attenuation660 = $request->input('attenuation660');
        $cat->sz880 = $request->input('sz880');
        $cat->sb880 = $request->input('sb880');
        $cat->rz880 = $request->input('rz880');
        $cat->rb880 = $request->input('rb880');
        $cat->fraction880 = $request->input('fraction880');
        $cat->attenuation880 = $request->input('attenuation880');
        $cat->sz950 = $request->input('sz950');
        $cat->sb950 = $request->input('sb950');
        $cat->rz950 = $request->input('rz950');
        $cat->rb950 = $request->input('rb950');
        $cat->fraction950 = $request->input('fraction950');
        $cat->attenuation950 = $request->input('attenuation950');
        $cat->save();
        return redirect('/aethalometro');
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
        $cat = Aethalometro::find($id);
        if(isset($cat)) {
            return view('editaraethalometro', compact('cat'));
        }
        return redirect('/aethalometro');
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
        $cat = Aethalometro::find($id);
        if(isset($cat)) {
            $cat->DateRpi = $request->input('DateRpi');
            $cat->TimeRpi = $request->input('TimeRpi');
            $cat->conc370 = $request->input('conc370');
            $cat->conc470 = $request->input('conc470');
            $cat->conc520 = $request->input('conc520');
            $cat->conc590 = $request->input('conc590');
            $cat->conc660 = $request->input('conc660');
            $cat->conc880 = $request->input('conc880');
            $cat->conc950 = $request->input('conc950');
            $cat->vflow = $request->input('vflow');
            $cat->sz370 = $request->input('sz370');
            $cat->sb370 = $request->input('sb370');
            $cat->rz370 = $request->input('rz370');
            $cat->rb370 = $request->input('rb370');
            $cat->fraction370 = $request->input('fraction370');
            $cat->attenuation370 = $request->input('attenuation370');
            $cat->sz470 = $request->input('sz470');
            $cat->sb470 = $request->input('sb470');
            $cat->rz470 = $request->input('rz470');
            $cat->rb470 = $request->input('rb470');
            $cat->fraction470 = $request->input('fraction470');
            $cat->attenuation470 = $request->input('attenuation470');
            $cat->sz520 = $request->input('sz520');
            $cat->sb520 = $request->input('sb520');
            $cat->rz520 = $request->input('rz520');
            $cat->rb520 = $request->input('rb520');
            $cat->fraction520 = $request->input('fraction520');
            $cat->attenuation520 = $request->input('attenuation520');
            $cat->sz590 = $request->input('sz590');
            $cat->sb590 = $request->input('sb590');
            $cat->rz590 = $request->input('rz590');
            $cat->rb590 = $request->input('rb590');
            $cat->fraction590 = $request->input('fraction590');
            $cat->attenuation590 = $request->input('attenuation590');
            $cat->sz660 = $request->input('sz660');
            $cat->sb660 = $request->input('sb660');
            $cat->rz660 = $request->input('rz660');
            $cat->rb660 = $request->input('rb660');
            $cat->fraction660 = $request->input('fraction660');
            $cat->attenuation660 = $request->input('attenuation660');
            $cat->sz880 = $request->input('sz880');
            $cat->sb880 = $request->input('sb880');
            $cat->rz880 = $request->input('rz880');
            $cat->rb880 = $request->input('rb880');
            $cat->fraction880 = $request->input('fraction880');
            $cat->attenuation880 = $request->input('attenuation880');
            $cat->sz950 = $request->input('sz950');
            $cat->sb950 = $request->input('sb950');
            $cat->rz950 = $request->input('rz950');
            $cat->rb950 = $request->input('rb950');
            $cat->fraction950 = $request->input('fraction950');
            $cat->attenuation950 = $request->input('attenuation950');
            $cat->save();
        }
        return redirect('/aethalometro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Aethalometro::find($id);
        if (isset($cat)) {
            $cat->delete();
        }
        return redirect('/aethalometro');
    }

    public function indexJson()
    {
        $cats = Aethalometro::all();
        return json_encode($cats);
    }
}