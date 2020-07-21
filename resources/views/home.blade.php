@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Status de Login</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está Logado!!
                </div>
                <div class="card-header">Sistema de Dados</div>
                <div class="card-body">
                    <a href="/nephelometro" class="btn btn-sm btn-primary" role="button">Nephelometro</a>
                    <a href="/maap" class="btn btn-sm btn-primary" role="button">Maap</a>
                    <a href="/aethalometro" class="btn btn-sm btn-primary" role="button">Aethalometro</a>
                    <a href="/perfilsolo" class="btn btn-sm btn-primary" role="button">Perfil de Solo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
