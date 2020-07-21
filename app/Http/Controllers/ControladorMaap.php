<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maap;

class ControladorMaap extends Controller
{
    public function __construct() {
        $this->middleware('auth'); 
    }
    
    public function index()
    {
         $cats = Maap::paginate(20);
        return view('maap', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novomaap');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Maap();
        $cat->dateRpiMaap = $request->input('dateRpiMaap');
        $cat->timeRpiMaap = $request->input('timeRpiMaap');
        $cat->dateMaap = $request->input('dateMaap');
        $cat->timeMaap = $request->input('timeMaap');
        $cat->statusMaap = $request->input('statusMaap');
        $cat->concentrationofBCMaap = $request->input('concentrationofBCMaap');
        $cat->massaofBCMaap = $request->input('massaofBCMaap');
        $cat->airFlowRateMaap = $request->input('airFlowRateMaap');
        $cat->lastValueMaap = $request->input('lastValueMaap');
        $cat->meanof1hMaap = $request->input('meanof1hMaap');
        $cat->meanof3hMaap = $request->input('meanof3hMaap');
        $cat->meanof24hMaap = $request->input('meanof24hMaap');
        $cat->save();
        return redirect('/maap');
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
         $cat = Maap::find($id);
        if(isset($cat)) {
            return view('editarmaap', compact('cat'));
        }
        return redirect('/maap');
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
         $cat = Maap::find($id);
        if(isset($cat)) {
            $cat->dateRpiMaap = $request->input('dateRpiMaap');
            $cat->timeRpiMaap = $request->input('timeRpiMaap');
            $cat->dateMaap = $request->input('dateMaap');
            $cat->timeMaap = $request->input('timeMaap');
            $cat->statusMaap = $request->input('statusMaap');
            $cat->concentrationofBCMaap = $request->input('concentrationofBCMaap');
            $cat->massaofBCMaap = $request->input('massaofBCMaap');
            $cat->airFlowRateMaap = $request->input('airFlowRateMaap');
            $cat->lastValueMaap = $request->input('lastValueMaap');
            $cat->meanof1hMaap = $request->input('meanof1hMaap');
            $cat->meanof3hMaap = $request->input('meanof3hMaap');
            $cat->meanof24hMaap = $request->input('meanof24hMaap');
            $cat->save();
        }
        return redirect('/maap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat = Maap::find($id);
        if (isset($cat)) {
            $cat->delete();
        }
        return redirect('/maap');
    }
    
     public function indexJson()
    {
        $cats = Maap::all();
        return json_encode($cats);
    }
}
