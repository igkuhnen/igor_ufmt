@extends('layouts.app')
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Igor A. Kuhnen">
        <title>Gradiente de Temperatura no solo</title>
    </head>
    
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <body>
        <nav class="site-header sticky-top py-1">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal">Gradiente de Temperatura no solo</h5>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-dark" href="/conhecamaap">MAAP</a>
                    <a class="p-2 text-dark" href="/conhecaaethalometro">Aethalometro</a>
                    <a class="p-2 text-dark" href="/conhecafluxo">Fluxo de CO²</a>
                    <a class="p-2 text-dark" href="/conhecanephelometro">Nephelometro</a>
                </nav>
            </div>
        </nav>

        <div class "row">
            <img src="img/nephelometro.jpg" width="366" height="200" 
                 alt="Multi Angle Absorption Photometer."
                 style="margin-left:100px;
                 margin-bottom:20px"
            >
        <div class="container">
            <div class="row">
                <div class="col-mod-8 mb-5">      
                    <p align="justify">O Nefelômetro é o principal instrumento usado in situ para medições diretas de
                    valor próximo ao coeficiente de espalhamento de luz das partículas transportados pelo
                    ar (MÜLLER et al., 2011). No presente trabalho, foi utilizado o modelo Ecotech
                    M9003 com medidas em 525 nm e resolução temporal de 5 minutos.
                    Durante a operação do instrumento, o ar da amostra é bombeado através do
                    inlet para dentro de uma câmara volumétrica de análise, onde é iluminado por uma
                    matriz de LEDs. O volume de ar amostrado é analisado até que chegue ao tubo
                    fotomultiplicador e passa por uma série de obturadores ao longo do eixo principal do
                    instrumento. O tubo fotomultiplicador produz sinais elétricos proporcionais à
                    intensidade da luz incidente, de modo que o sinal produzido é proporcional ao
                    coeficiente de espalhamento (𝜎𝑠) do ar.
                            De maneira simplificada, uma válvula situada no inlet é acionada
                    periodicamente para drenar toda a amostra de ar no interior do instrumento e poder
                    medir o sinal de ar limpo do ambiente. O sinal obtido é subtraído do sinal original para
                    que as medidas de espalhamento sejam exclusivamente devido à presença de aerossóis.
                    O coletor de luz e outros defletores eliminam reflexos indesejados da fonte de luz e da
                    luz difusa da extremidade não detectável da célula. O interior da célula e os defletores
                    são revestidos com uma tinta preta com acabamento especial para reduzir quaisquer
                    reflexos internos. </p>
                </div>
            </div>
        </div>
    </body>
</html>