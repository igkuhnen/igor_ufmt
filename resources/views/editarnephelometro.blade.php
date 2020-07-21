@extends('layouts.app', ["current" => "nephelometro"])

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/nephelometro/{{$cat->id}}" method="POST">
            @csrf
            <div class="form-group">
                <div class='input-group date'>
                    <label for="dataNephelometro">Data do Nephelometro</label>
                        <input type='text' class="form-control" /
                               value="{{$cat->dataNephelometro}}" id="dataNephelometro" name="dataNephelometro" placeholder="Data do Nephelometro">
                </div>
                
                
                <label for="typeNephelometro">Tipo do Nephelometro</label>
                <input type="string" class="form-control" name="typeNephelometro" 
                       value="{{$cat->typeNephelometro}}" id="typeNephelometro" placeholder="Tipo do Nephelometro">
             
                <label for="coefNephelometro">Coeficiente do Nephelometro</label>
                <input type="string" class="form-control" name="coefNephelometro" 
                       value="{{$cat->coefNephelometro}}" id="coefNephelometro" placeholder="Coeficiente do Nephelometro">
                
                <label for="airtempNephelometro">Temperatura do ar</label>
                <input type="float" class="form-control" name="airtempNephelometro" 
                       value="{{$cat->airtempNephelometro}}" id="airtempNephelometro" placeholder="Temperatura do ar">
             
                <label for="celltempNephelometro">Temperatura da Celula?</label>
                <input type="float" class="form-control" name="celltempNephelometro" 
                    value="{{$cat->celltempNephelometro}}" id="celltempNephelometro" placeholder="Temperatura da Celula?">
             
                <label for="rhNephelometro">Temperatura da Celula?</label>
                <input type="float" class="form-control" name="rhNephelometro" 
                       value="{{$cat->rhNephelometro}}" id="rhNephelometro" placeholder="Data do Nephelometro">
                
                <label for="pressureNephelometro">Pressão do Nephelometro</label>
                <input type="float" class="form-control" name="pressureNephelometro" 
                       value="{{$cat->pressureNephelometro}}" id="pressureNephelometro" placeholder="Pressão do Nephelometro">
                
                                
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection