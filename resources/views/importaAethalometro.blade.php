@extends('layouts.app', ["current" => "importaAethalometro"])

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Importação de dados do Aethalometro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Importação de dados do Aethalometro
        </div>
        <div class="card-body">
            <form action="{{ route('importaAetha') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-sm btn-primary">Importar dados Nephelometro</button>
                <a class="btn btn-sm btn-primary" href="{{ route('exportaAetha') }}">Exportar dados Aethalometro</a>
            </form>
        </div>
    </div>
</div>
   
</body>
</html>