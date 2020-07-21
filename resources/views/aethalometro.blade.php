@extends('layouts.app', ["current" => "aethalometro"])

@section('content')
<div class="container">
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Exibindo {{$cats->count()}} Aethalometro de {{$cats->total()}} 
            ( {{$cats->firstItem()}} a {{$cats->lastItem()}} )</h5>
    @if(count($cats) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Conc 370</th>
                        <th>Conc 470</th>
                        <th>Conc 520</th>
                        <th>Conc 590</th>
                        <th>Conc 660</th>
                        <th>Conc 880</th>
                        <th>Conc 950</th>
                        <th>Vflow</th>
                        <th>SZ 370</th>
                        <th>SB 370</th>
                        <th>RZ 370</th>
                        <th>RB 370</th>
                        <th>Fração 370</th>
                        <th>Atenuação 370</th>
                        <th>SZ 470</th>
                        <th>SB 470</th>
                        <th>RZ 470</th>
                        <th>RB 470</th>
                        <th>Fração 470</th>
                        <th>Atenuação 470</th>
                        <th>SZ 520</th>
                        <th>SB 520</th>
                        <th>RZ 520</th>
                        <th>RB 520</th>
                        <th>Fração 520</th>
                        <th>Atenuação 520</th>
                        <th>SZ 590</th>
                        <th>SB 590</th>
                        <th>RZ 590</th>
                        <th>RB 590</th>
                        <th>Fração 590</th>
                        <th>Atenuação 590</th>
                        <th>SZ 660</th>
                        <th>SB 660</th>
                        <th>RZ 660</th>
                        <th>RB 660</th>
                        <th>Fração 660</th>
                        <th>Atenuação 660</th>
                        <th>SZ 880</th>
                        <th>SB 880</th>
                        <th>RZ 880</th>
                        <th>RB 880</th>
                        <th>Fração 880</th>
                        <th>Atenuação 880</th>
                        <th>SZ 950</th>
                        <th>SB 950</th>
                        <th>RZ 950</th>
                        <th>RB 950</th>
                        <th>Fração 950</th>
                        <th>Atenuação 950</th>
                    </tr>
                </thead>   
                <tbody>
        @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->DateRpi}}</td>
                        <td>{{$cat->TimeRpi}}</td>
                        <td>{{$cat->conc370}}</td>
                        <td>{{$cat->conc470}}</td>
                        <td>{{$cat->conc520}}</td>
                        <td>{{$cat->conc590}}</td>
                        <td>{{$cat->conc660}}</td>
                        <td>{{$cat->conc880}}</td>
                        <td>{{$cat->conc950}}</td>
                        <td>{{$cat->vflow}}</td>
                        <td>{{$cat->sz370}}</td>
                        <td>{{$cat->sb370}}</td>
                        <td>{{$cat->rz370}}</td>
                        <td>{{$cat->rb370}}</td>
                        <td>{{$cat->fraction370}}</td>
                        <td>{{$cat->attenuation370}}</td>
                        <td>{{$cat->sz470}}</td>
                        <td>{{$cat->sb470}}</td>
                        <td>{{$cat->rz470}}</td>
                        <td>{{$cat->rb470}}</td>
                        <td>{{$cat->fraction470}}</td>
                        <td>{{$cat->attenuation470}}</td>
                        <td>{{$cat->sz520}}</td>
                        <td>{{$cat->sb520}}</td>
                        <td>{{$cat->rz520}}</td>
                        <td>{{$cat->rb520}}</td>
                        <td>{{$cat->fraction520}}</td>
                        <td>{{$cat->attenuation520}}</td>
                        <td>{{$cat->sz590}}</td>
                        <td>{{$cat->sb590}}</td>
                        <td>{{$cat->rz590}}</td>
                        <td>{{$cat->rb590}}</td>
                        <td>{{$cat->fraction590}}</td>
                        <td>{{$cat->attenuation590}}</td>
                        <td>{{$cat->sz660}}</td>
                        <td>{{$cat->sb660}}</td>
                        <td>{{$cat->rz660}}</td>
                        <td>{{$cat->rb660}}</td>
                        <td>{{$cat->fraction660}}</td>
                        <td>{{$cat->attenuation660}}</td>
                        <td>{{$cat->sz880}}</td>
                        <td>{{$cat->sb880}}</td>
                        <td>{{$cat->rz880}}</td>
                        <td>{{$cat->rb880}}</td>
                        <td>{{$cat->fraction880}}</td>
                        <td>{{$cat->attenuation880}}</td>
                        <td>{{$cat->sz950}}</td>
                        <td>{{$cat->sb950}}</td>
                        <td>{{$cat->rz950}}</td>
                        <td>{{$cat->rb950}}</td>
                        <td>{{$cat->fraction950}}</td>
                        <td>{{$cat->attenuation950}}</td>
                        <td>
                            <a href="/aethalometro/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/aethalometro/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
        @endforeach                
                </tbody>
            </table>
    @endif         
        </div>
        <div class="card-footer">
        {{$cats->links()}}
            <a href="/aethalometro/novo" class="btn btn-sm btn-primary" role="button">Novo Aethalometro</a>
            <a href=/ImpExpaAethaView class = "btn btn-sm btn-primary" role="button">Importar/Exportar</a>
        </div>
    </div>
</div>


@endsection