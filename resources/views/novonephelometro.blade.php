@extends('layouts.app', ["current" => "nephelometro"])
@section('content')

<div class="container">
    <div class="card border">
        <div class="card-body">
            <form action="/nephelometro" method="POST">
                @csrf
                <div class='input-group date'>
                    <label for="dataNephelometro">Data do Nephelometro</label>
                        <input type='text' class="form-control" /
                            id="dataNephelometro" name="dataNephelometro" placeholder="Data do Nephelometro">
                </div>
                                <script type="text/javascript">
                                    $(function () {
                                    $("#dataNephelometro").datetimepicker({
                                        format: 'YYYY-MM-DD HH:mm:ss'
                                        });
                                    });
                                </script>

                <label for="typeNephelometro">Tipo do Nephelometro</label>
                <input type="text" class="form-control" name="typeNephelometro" 
                    id="typeNephelometro" placeholder="Tipo do Nephelometro">
                
                <label for="coefNephelometro">Coeficiente do Nephelometro</label>
                <input type="string" class="form-control" name="coefNephelometro" 
                        id="coefNephelometro" placeholder="Coeficiente do Nephelometro">
                    
                <label for="airtempNephelometro">Temperatura do ar</label>
                <input type="float" class="form-control" name="airtempNephelometro" 
                        id="airtempNephelometro" placeholder="Temperatura do ar">
                
                <label for="celltempNephelometro">Temperatura da Celula?</label>
                <input type="float" class="form-control" name="celltempNephelometro" 
                        id="celltempNephelometro" placeholder="Temperatura da Celula?">
                
                <label for="rhNephelometro">Temperatura da Celula?</label>
                <input type="float" class="form-control" name="rhNephelometro" 
                        id="rhNephelometro" placeholder="Data do Nephelometro">
                    
                <label for="pressureNephelometro">Pressão do Nephelometro</label>
                <input type="float" class="form-control" name="pressureNephelometro" 
                        id="pressureNephelometro" placeholder="Pressão do Nephelometro">
                
                
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>         
                
            </form>
        </div>      
    </div>
    
</div>
@endsection