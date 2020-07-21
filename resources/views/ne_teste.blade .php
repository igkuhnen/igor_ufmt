@extends('layouts.app', ["current" => "nephelometro"])

@section('content')
<div class="container">
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Exibindo {{$cats->count()}} Nephelometro de {{$cats->total()}} 
            ( {{$cats->firstItem()}} a {{$cats->lastItem()}} )</h5>
    @if(count($cats) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Coeficiente</th>
                        <th>Temp. do ar</th>
                        <th>Temp Cell </th>
                        <th>RH</th>
                        <th>Pressão</th>                    
                        <th>Ações</th>
                    </tr>
                </thead>   
                <tbody>
        @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->dataNephelometro}}</td>
                        <td>{{$cat->typeNephelometro}}</td>
                        <td>{{$cat->coefNephelometro}}</td>
                        <td>{{$cat->airtempNephelometro}}</td>
                        <td>{{$cat->celltempNephelometro}}</td>
                        <td>{{$cat->rhNephelometro}}</td>
                        <td>{{$cat->pressureNephelometro}}</td>
                        <td>
                            <a href="/nephelometro/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/nephelometro/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach                
                </tbody>
            </table>
    @endif    
        </div>     
    </div>
        <div class="card-footer text-muted">
        {{$cats->links()}}
        </div>
        <div class="card-footer">
            <a href="/nephelometro/novo" class="btn btn-sm btn-primary" role="button">Novo Nephelometro</a>
            <a href=/ImpExpNepheView class = "btn btn-sm btn-primary" role="button">Importar/Exportar</a>
        </div>
</div>



@endsection