@extends('layouts.app')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Igor A. Kuhnen">
        <title>Aethalometro</title>
    </head>

    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <body>
        <nav class="site-header sticky-top py-1">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal">Aethalometro</h5>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-dark" href="/conhecamaap">MAAP</a>
                    <a class="p-2 text-dark" href="/conhecanephelometro">Nephelometro</a>
                    <a class="p-2 text-dark" href="/conhecafluxo">Fluxo de CO²</a>
                    <a class="p-2 text-dark" href="/conhecasolo">Solo</a>
                </nav>
            </div>
        </nav>
            
        <div class "row">
            <img src="{{'img/aethalometro.jpg'}}" alt="Sensor de medida de temperatura no solo.">
        </div>

        <div class="container">
            <div class "row">
                <div class="col-mod-8 mb-5">
                    <p align="justify">O Aetalômetro é um equipamento que fornece a medição ótica em tempo real
                    da concentração de black carbon (BC) presente na atmosfera, em sete comprimentos
                    de ondas. O seu princípio de funcionamento consiste em medir a atenuação
                    (ATN) de um feixe de luz transmitido através de um filtro de quartzo, enquanto o
                    mesmo coleta continuamente medidas de aerossóis com resolução temporal de 1 a 5
                    minutos.
                    A amostra de ar é extraída através da porta de entrada, normalmente a uma taxa
                    de fluxo de alguns litros por minuto, usando uma pequena bomba interna. A vazão é
                    monitorada por um medidor de vazão mássico interno e é estabilizada eletronicamente
                    ao valor do ponto de ajuste inserido no software. O equipamento coleta a amostra em 
                    40 uma fita de filtro de fibra de quartzo e realiza uma análise ótica contínua, enquanto a
                    amostra está sendo coletada. Durante esse processo, a fita não se move. A fita só
                    avança quando o ponto atinge certa densidade. Em uma cidade a fita pode avançar 3
                    ou 4 vezes por dia. Em um local rural, a cada pode durar um dia ou mais. O rolo de
                    fita contém 1500 pontos. A análise fornece uma nova leitura a cada período base. O
                    usuário define a base de tempo para a taxa de dados desejada, geralmente de 1 a 5
                    minutos, embora os dados para uma leitura por segundo sejam possíveis. Os dados são
                    gravados em disquete; transmitido pela porta COM e produzido como uma tensão
                    analógica.</p>
                </div>
            </div> 
        </div>        
    </body>
</html>