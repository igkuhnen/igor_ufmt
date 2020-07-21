@extends('layouts.app', ["current" => "perfildesolo"])
@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/perfildesolo" method="POST">
            @csrf
            <div class='input-group date'>
                <label for="datatime">Data do Perfil de Solo</label>
                    <input type='text' class="form-control" /
                           id="datatime" name="datatime" placeholder="Data do Perfil de Solo">
            </div>
                  
            
             <label for="record">Record</label>
             <input type="float" class="form-control" name="record" 
                    id="record" placeholder="Record">
             
             <label for="BattV">Voltagem da Bateria</label>
             <input type="float" class="form-control" name="BattV" 
                    id="BattV" placeholder="Voltagem da Bateria">
             
             <label for="PTemp_C">Temp C</label>
             <input type="float" class="form-control" name="PTemp_C" 
                    id="PTemp_C" placeholder="Temp C">
                
             <label for="T108_C">T 108 C</label>
             <input type="float" class="form-control" name="T108_C" 
                    id="T108_C" placeholder="T 108 C">
            
            <label for="T108_C_2">T 108 C2</label>
             <input type="float" class="form-control" name="T108_C_2" 
                    id="T108_C_2" placeholder="T 108 C2">
            
            <label for="T108_C_3">T 108 C3</label>
             <input type="float" class="form-control" name="T108_C_3" 
                    id="T108_C_3" placeholder="T 108 C3">
            
            <label for="T108_C_4">T 108 C4</label>
             <input type="float" class="form-control" name="T108_C_4" 
                    id="T108_C_4" placeholder="T 108 C4">
            
            <label for="T108_C_5">T 108 C5</label>
             <input type="float" class="form-control" name="T108_C_5" 
                    id="T108_C_5" placeholder="T 108 C5">
            
            <label for="DiffVolt">Dif. Voltagem</label>
             <input type="float" class="form-control" name="DiffVolt" 
                    id="DiffVolt" placeholder="Dif. Voltagem 2">
            
            <label for="DiffVolt_2">Dif. Voltagem 2</label>
             <input type="float" class="form-control" name="DiffVolt_2" 
                    id="DiffVolt_2" placeholder="Dif. Voltagem 2">
            
            <label for="DiffVolt_3">Dif. Voltagem 3</label>
             <input type="float" class="form-control" name="DiffVolt_3" 
                    id="DiffVolt_3" placeholder="Dif. Voltagem 3">
            
            <label for="DiffVolt_4">Dif. Voltagem 4</label>
             <input type="float" class="form-control" name="DiffVolt_4" 
                    id="DiffVolt_4" placeholder="Dif. Voltagem 4">
            
            <label for="VW">VW</label>
             <input type="float" class="form-control" name="VW" 
                    id="VW" placeholder="VW">
            
            <label for="PA_uS">PA US</label>
             <input type="float" class="form-control" name="PA_uS" 
                    id="PA_uS" placeholder="PA US">
            
            <label for="VW_2">VW 2</label>
             <input type="float" class="form-control" name="VW_2" 
                    id="VW_2" placeholder="VW 2">
            
            <label for="PA_uS_2">PA US 2</label>
             <input type="float" class="form-control" name="PA_uS_2" 
                    id="PA_uS_2" placeholder="PA US 2">
        
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
           
        </form>
    </div>      
</div>

@endsection