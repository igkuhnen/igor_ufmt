@extends('layouts.app', ["current" => "maap"])
@section('content')

<div class="container">
    <div class="card border">
        <div class="card-body">
            <form action="/maap" method="POST">
                @csrf
                <div class='input-group date'>
                    <label for="dateRpiMaap">Data do Maap</label>
                        <input type='text' class="form-control" /
                            id="dateRpiMaap" name="dateRpiMaap" placeholder="Data do Maap RPI">
                </div>
                    <script type="text/javascript">
                        $(function () {
                          $("#dateRpiMaap").datetimepicker({
                            format: 'YYYY-MM-DD'
                          });
                        });
                    </script>
                <div class='input-group date'>
                    <label for="timeRpiMaap">Hora do Maap</label>
                        <input type='text' class="form-control" /
                            id="timeRpiMaap" name="timeRpiMaap" placeholder="Hora do Maap RPI">
                </div>

                <script type="text/javascript">
                        $(function () {
                          $("#timeRpiMaap").datetimepicker({
                            format: 'HH:mm:ss'
                          });
                        });
                </script>
                
                <div class='input-group date'>
                    <label for="dateMaap">Data do Maap</label>
                        <input type='text' class="form-control" /
                            id="dateMaap" name="dateMaap" placeholder="Data do Maap">
                </div>
                <script type="text/javascript">
                        $(function () {
                          $("#dateMaap").datetimepicker({
                            format: 'YYYY-MM-DD'
                          });
                        });
                    </script>
                <div class='input-group date'>
                    <label for="timeMaap">Hora do Maap</label>
                        <input type='text' class="form-control" /
                            id="timeMaap" name="timeMaap" placeholder="Hora do Maap">
                </div>
                <script type="text/javascript">
                        $(function () {
                          $("#timeMaap").datetimepicker({
                            format: 'HH:mm:ss'
                          });
                        });
                </script>
                
                <label for="statusMaap">Status do Maap</label>
                <input type="float" class="form-control" name="statusMaap" 
                    id="statusMaap" placeholder="Status do Maap">
                
                <label for="concentrationofBCMaap">Concentração de BC Maap</label>
                <input type="float" class="form-control" name="concentrationofBCMaap" 
                        id="concentrationofBCMaap" placeholder="Concentração de BC MAAP">
                
                <label for="massaofBCMaap">Massa de BC do Maap</label>
                <input type="float" class="form-control" name="massaofBCMaap" 
                        id="massaofBCMaap" placeholder="Massa de BC do Maap">
                    
                <label for="airFlowRateMaap">Taxa de fluxo de ar</label>
                <input type="float" class="form-control" name="airFlowRateMaap" 
                        id="airFlowRateMaap" placeholder="Taxa de fluxo de ar">
                
                <label for="lastValueMaap">Ultimo Valor do Maap</label>
                <input type="float" class="form-control" name="lastValueMaap" 
                        id="lastValueMaap" placeholder="Ultimo Valor do Maap">
                
                <label for="meanof1hMaap">Média de 1 hora</label>
                <input type="float" class="form-control" name="meanof1hMaap" 
                        id="meanof1hMaap" placeholder="Média de 1 hora">
                
                <label for="meanof3hMaap">Média de 3 horas</label>
                <input type="float" class="form-control" name="meanof3hMaap" 
                        id="meanof3hMaap" placeholder="Média de 3 horas">
                
                <label for="meanof24hMaap">Média de 24 horas</label>
                <input type="float" class="form-control" name="meanof24hMaap" 
                        id="meanof24hMaap" placeholder="Média de 24 horas">
            
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancel</button>            
            </form>
        </div>      
    </div>
    
</div>
@endsection