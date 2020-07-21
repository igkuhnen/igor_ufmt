@extends('layouts.app')
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Igor A. Kuhnen">
        <title>MAAP</title>
    </head>
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <body>
        <nav class="site-header sticky-top py-1">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal">MAAP</h5>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-dark" href="/conhecaaethalometro">Aethalometro</a>
                    <a class="p-2 text-dark" href="/conhecanephelometro">Nephelometro</a>
                    <a class="p-2 text-dark" href="/conhecafluxo">Fluxo de CO²</a>
                    <a class="p-2 text-dark" href="/conhecasolo">Solo</a>
                </nav>
            </div>
        </nav>

        <div class "row">
      <img src="{{'img/MAAP_SHF.JPG'}}" width="300" height="200" 
      alt="Multi Angle Absorption Photometer."
      style="margin-left:100px;
            margin-bottom:20px"
      >

        <div class="container">
            <div class="row">
                <div class="col-mod-8 mb-5">
                    <p align="justify">O MAAP(Multi Angle Absorption Photometer) mede, em tempo real, a concentração de black
                        carbon equivalente. O alto poder de absorção da radiação pelo black carbon
                        equivalente torna possível determinar a sua concentração através da medida de
                        atenuação de um feixe de luz transmitido através de um filtro de partículas. O
                        comprimento de onda do LED do instrumento é 670 nm. O instrumento desconta o
                        espalhamento ótico que ocorre dentro do filtro e as interações entre as partículas
                        coletadas para medir exclusivamente a absorção. O cálculo de transferência radiativa é
                        realizado no próprio filtro de fibra de vidro (Hyvärinen et al., 2013).</p>
                </div>
            </div>
        </div>
    </body>
</html>