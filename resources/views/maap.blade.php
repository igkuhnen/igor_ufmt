@extends('layouts.app', ["current" => "maap"])

@section('content')
<div class="container">
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Exibindo {{$cats->count()}} Maap de {{$cats->total()}} 
            ( {{$cats->firstItem()}} a {{$cats->lastItem()}} )</h5>
    @if(count($cats) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Data RPI</th>
                        <th>Hora RPI</th>
                        <th>Data Maap</th>
                        <th>Hora Maap</th>
                        <th>Status</th>
                        <th>Concentração de BC</th>
                        <th>Massa de BC</th>
                        <th>Taxa de fluxo de ar</th>
                        <th>Ultimo Valor do Maap</th>
                        <th>Média de 1 hora</th>
                        <th>Média de 3 hora</th>
                        <th>Média de 24 hora</th>
                        
                    </tr>
                </thead>   
                <tbody>
        @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->dateRpiMaap}}</td>
                        <td>{{$cat->timeRpiMaap}}</td>
                        <td>{{$cat->dateMaap}}</td>
                        <td>{{$cat->timeMaap}}</td>
                        <td>{{$cat->statusMaap}}</td>
                        <td>{{$cat->concentrationofBCMaap}}</td>
                        <td>{{$cat->massaofBCMaap}}</td>
                        <td>{{$cat->airFlowRateMaap}}</td>
                        <td>{{$cat->lastValueMaap}}</td>
                        <td>{{$cat->meanof1hMaap}}</td>
                        <td>{{$cat->meanof3hMaap}}</td>
                        <td>{{$cat->meanof24hMaap}}</td>
                        <td>
                            <a href="/maap/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/maap/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach                
                </tbody>
            </table>
    @endif         
        </div>
        <div class="card-footer">
        {{$cats->links()}}
            <a href="/maap/novo" class="btn btn-sm btn-primary" role="button">Novo Maap</a>
            <a href=/ImpExpMaapView class = "btn btn-sm btn-primary" role="button">Importar/Exportar</a>
        </div>
    </div>
</div>


@endsection