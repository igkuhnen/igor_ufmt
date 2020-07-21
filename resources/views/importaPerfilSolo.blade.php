@extends('layouts.app', ["current" => "importaPerfilSolo"])

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Importação de dados do Perfil de Solo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
   
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Importação de dados do Perfil de Solo
        </div>
        <div class="card-body">
            <form action="{{ route('importaPerfilSolo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-sm btn-primary">Importar dados Perfil de Solo</button>
                <a class="btn btn-sm btn-primary" href="{{ route('exportaPerfilSolo') }}">Exportar dados Perfil de Solo</a>
            </form>
        </div>
    </div>
</div>
   
</body>
</html>