@extends('layouts.app', ["current" => "aethalometro"])

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/aethalometro/{{$cat->id}}" method="POST">
            @csrf
            <div class="form-group">
                <div class='input-group date'>
                    <label for="DateRpi">Data do Nephelometro</label>
                        <input type='text' class="form-control" /
                               value="{{$cat->DateRpi}}" id="DateRpi" name="DateRpi" placeholder="Data do Aethalometro">
                </div>
                
                <div class='input-group date'>
                    <label for="TimeRpi">Hora do Nephelometro</label>
                        <input type='text' class="form-control" /
                               value="{{$cat->TimeRpi}}" id="TimeRpi" name="TimeRpi" placeholder="Hora do Aethalometro">
                </div>
                
                <label for="conc370">Conc 370</label>
                <input type="float" class="form-control" name="conc370" 
                       value="{{$cat->conc370}}" id="conc370" placeholder="Conc 370">
             
                <label for="conc470">Conc 470</label>
                <input type="float" class="form-control" name="conc470" 
                       value="{{$cat->conc470}}" id="conc470" placeholder="Conc 470">
                
                <label for="conc520">Conc 520</label>
                <input type="float" class="form-control" name="conc520" 
                       value="{{$cat->conc520}}" id="conc520" placeholder="Conc 520">
                
                <label for="conc590">Conc 590</label>
                <input type="float" class="form-control" name="conc590" 
                       value="{{$cat->conc590}}" id="conc590" placeholder="Conc 590">
                
                <label for="conc660">Conc 660</label>
                <input type="float" class="form-control" name="conc660" 
                       value="{{$cat->conc660}}" id="conc660" placeholder="Conc 660">

                <label for="conc880">Conc 880</label>
                <input type="float" class="form-control" name="conc880" 
                       value="{{$cat->conc880}}" id="conc880" placeholder="Conc 880">
                
                <label for="conc950">Conc 950</label>
                <input type="float" class="form-control" name="conc950" 
                       value="{{$cat->conc950}}" id="conc950" placeholder="Conc 950">
                
                <label for="vflow">VFlow</label>
                <input type="float" class="form-control" name="vflow" 
                       value="{{$cat->vflow}}" id="vflow" placeholder="VFlow">
                
                <label for="sz370">SZ 370</label>
                <input type="float" class="form-control" name="sz370" 
                       value="{{$cat->sz370}}" id="sz370" placeholder="SZ 370">
                
                <label for="sb370">SB 370</label>
                <input type="float" class="form-control" name="sb370" 
                       value="{{$cat->sb370}}" id="sb370" placeholder="SB 370">
                
                <label for="rz370">RZ 370</label>
                <input type="float" class="form-control" name="rz370" 
                       value="{{$cat->rz370}}" id="rz370" placeholder="RZ 370">
                
                <label for="rb370">RB 370</label>
                <input type="float" class="form-control" name="rb370" 
                       value="{{$cat->rb370}}" id="rb370" placeholder="RB 370">
                
                <label for="fraction370">Fração 370</label>
                <input type="float" class="form-control" name="fraction370" 
                       value="{{$cat->fraction370}}" id="fraction370" placeholder="Fração 370">
                
                <label for="attenuation370">Atenuação 370</label>
                <input type="float" class="form-control" name="attenuation370" 
                       value="{{$cat->attenuation370}}" id="attenuation370" placeholder="Atenuação 370">
               
                <label for="sz470">SZ 470</label>
                <input type="float" class="form-control" name="sz470" 
                       value="{{$cat->sz470}}" id="sz470" placeholder="SZ 470">
                
                <label for="sb470">SB 470</label>
                <input type="float" class="form-control" name="sb470" 
                       value="{{$cat->sb470}}" id="sb470" placeholder="SB 470">
                
                <label for="rz470">RZ 470</label>
                <input type="float" class="form-control" name="rz470" 
                       value="{{$cat->rz470}}" id="rz470" placeholder="RZ 470">
                
                <label for="rb470">RB 470</label>
                <input type="float" class="form-control" name="rb470" 
                       value="{{$cat->rb470}}" id="rb470" placeholder="RB 470">
                
                <label for="fraction470">Fração 470</label>
                <input type="float" class="form-control" name="fraction470" 
                       value="{{$cat->fraction470}}" id="fraction470" placeholder="Fração 470">
                
                <label for="attenuation470">Atenuação 470</label>
                <input type="float" class="form-control" name="attenuation470" 
                       value="{{$cat->attenuation470}}" id="attenuation470" placeholder="Atenuação 470">
<!--                -->
                
                <label for="sz520">SZ 520</label>
                <input type="float" class="form-control" name="sz520" 
                       value="{{$cat->sz520}}" id="sz520" placeholder="SZ 520">
                
                <label for="sb520">SB 520</label>
                <input type="float" class="form-control" name="sb520" 
                       value="{{$cat->sb520}}" id="sb520" placeholder="SB 520">
                
                <label for="rz520">RZ 520</label>
                <input type="float" class="form-control" name="rz520" 
                       value="{{$cat->rz520}}" id="rz520" placeholder="RZ 520">
                
                <label for="rb520">RB 520</label>
                <input type="float" class="form-control" name="rb520" 
                       value="{{$cat->rb520}}" id="rb520" placeholder="RB 520">
                
                <label for="fraction520">Fração 520</label>
                <input type="float" class="form-control" name="fraction520" 
                       value="{{$cat->fraction520}}" id="fraction520" placeholder="Fração 520">
                
                <label for="attenuation520">Atenuação 520</label>
                <input type="float" class="form-control" name="attenuation520" 
                       value="{{$cat->attenuation520}}" id="attenuation520" placeholder="Atenuação 520">
<!--                -->
                
                <label for="sz590">SZ 590</label>
                <input type="float" class="form-control" name="sz590" 
                       value="{{$cat->sz590}}" id="sz590" placeholder="SZ 590">
                
                <label for="sb590">SB 590</label>
                <input type="float" class="form-control" name="sb590" 
                       value="{{$cat->sb590}}" id="sb590" placeholder="SB 590">
                
                <label for="rz590">RZ 590</label>
                <input type="float" class="form-control" name="rz590" 
                       value="{{$cat->rz590}}" id="rz590" placeholder="RZ 590">
                
                <label for="rb590">RB 590</label>
                <input type="float" class="form-control" name="rb590" 
                       value="{{$cat->rb590}}" id="rb590" placeholder="RB 590">
                
                <label for="fraction590">Fração 590</label>
                <input type="float" class="form-control" name="fraction590" 
                       value="{{$cat->fraction590}}" id="fraction590" placeholder="Fração 590">
                
                <label for="attenuation590">Atenuação 590</label>
                <input type="float" class="form-control" name="attenuation590" 
                       value="{{$cat->attenuation590}}" id="attenuation590" placeholder="Atenuação 590">
<!--                -->
                
                <label for="sz660">SZ 660</label>
                <input type="float" class="form-control" name="sz660" 
                       value="{{$cat->sz660}}" id="sz660" placeholder="SZ 660">
                
                <label for="sb660">SB 660</label>
                <input type="float" class="form-control" name="sb660" 
                       value="{{$cat->sb660}}" id="sb660" placeholder="SB 660">
                
                <label for="rz660">RZ 660</label>
                <input type="float" class="form-control" name="rz660" 
                       value="{{$cat->rz660}}" id="rz660" placeholder="RZ 660">
                
                <label for="rb660">RB 660</label>
                <input type="float" class="form-control" name="rb660" 
                       value="{{$cat->rb660}}" id="rb660" placeholder="RB 660">
                
                <label for="fraction660">Fração 660</label>
                <input type="float" class="form-control" name="fraction660" 
                       value="{{$cat->fraction660}}" id="fraction660" placeholder="Fração 660">
                
                <label for="attenuation660">Atenuação 660</label>
                <input type="float" class="form-control" name="attenuation660" 
                       value="{{$cat->attenuation660}}" id="attenuation660" placeholder="Atenuação 660">
                
<!--                -->
                
                <label for="sz880">SZ 880</label>
                <input type="float" class="form-control" name="sz880" 
                       value="{{$cat->sz880}}" id="sz880" placeholder="SZ 880">
                
                <label for="sb880">SB 880</label>
                <input type="float" class="form-control" name="sb880" 
                       value="{{$cat->sb880}}" id="sb880" placeholder="SB 880">
                
                <label for="rz880">RZ 880</label>
                <input type="float" class="form-control" name="rz880" 
                       value="{{$cat->rz880}}" id="rz880" placeholder="RZ 880">
                
                <label for="rb880">RB 880</label>
                <input type="float" class="form-control" name="rb880" 
                       value="{{$cat->rb880}}" id="rb880" placeholder="RB 880">
                
                <label for="fraction880">Fração 880</label>
                <input type="float" class="form-control" name="fraction880" 
                       value="{{$cat->fraction880}}" id="fraction880" placeholder="Fração 880">
                
                <label for="attenuation880">Atenuação 880</label>
                <input type="float" class="form-control" name="attenuation880" 
                       value="{{$cat->attenuation880}}" id="attenuation880" placeholder="Atenuação 880">  
                
<!--                -->
                
                <label for="sz950">SZ 950</label>
                <input type="float" class="form-control" name="sz950" 
                       value="{{$cat->sz950}}" id="sz950" placeholder="SZ 950">
                
                <label for="sb950">SB 950</label>
                <input type="float" class="form-control" name="sb950" 
                       value="{{$cat->sb950}}" id="sb950" placeholder="SB 950">
                
                <label for="rz950">RZ 950</label>
                <input type="float" class="form-control" name="rz950" 
                       value="{{$cat->rz950}}" id="rz950" placeholder="RZ 950">
                
                <label for="rb950">RB 950</label>
                <input type="float" class="form-control" name="rb950" 
                       value="{{$cat->rb950}}" id="rb950" placeholder="RB 950">
                
                <label for="fraction950">Fração 950</label>
                <input type="float" class="form-control" name="fraction950" 
                       value="{{$cat->fraction950}}" id="fraction950" placeholder="Fração 950">
                
                <label for="attenuation950">Atenuação 950</label>
                <input type="float" class="form-control" name="attenuation950" 
                       value="{{$cat->attenuation950}}" id="attenuation950" placeholder="Atenuação 950"> 
                                
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection