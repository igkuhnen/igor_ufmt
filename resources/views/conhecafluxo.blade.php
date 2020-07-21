@extends('layouts.app')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Igor A. Kuhnen">
    <title>Fluxo de CO²</title>
  </head>

  <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <body>

    <nav class="site-header sticky-top py-1">
      <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Fluxo de Co²</h5>
          <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="/conhecamaap">MAAP</a>
            <a class="p-2 text-dark" href="/conhecanephelometro">Nephelometro</a>
            <a class="p-2 text-dark" href="/conhecaaethalometro">Aethalometro</a>
            <a class="p-2 text-dark" href="/conhecasolo">Solo</a>
          </nav>
      </div>
    </nav>

    <div class "row">
      <img src="{{'img/MAAP_SHF.JPG'}}" width="300" height="200" 
      alt="Sensor de medida de temperatura no solo."
      style="margin-left:100px;
            margin-bottom:20px"
      >
    </div>

    <div class = "container">
        
        <div class "row">

            <div class="col-mod-8 mb-5">   
               
            <p align="justify"> Aproximadamente 28% da associação global de carbono do solo
            encontrado em regiões tropicais e cerca de 53% do carbono na biomassa terrestre
            estão acima ou logo abaixo do solo (SOLOMON et al., 1993). Seguramente um
            dos elementos mais abundantes no planeta, o carbono se origina tanto de
            compostos orgânicos como inorgânicos (ROCHA et al., 2005). O componente
            essencial do ciclo do carbono é o dióxido de carbono (CO2), que juntamente com
            o metano (CH4), hidrocarbonetos não metânicos (HCNM) e monóxido de carbono
            (CO), tais quais são essenciais a vida. O dióxido de carbono tem função de
            destaque na fotossíntese e regulação do clima. (MARTINS et al., 2014).
            Quase todo o CO2 disponível no planeta (perto de 98%) está nos oceanos,
            dissolvido na água como bicarbonato, e o restante está na atmosfera, onde sua
            concentração oscila em torno de 0,5g CO2 por kg de ar, com maior concentração
            nos grandes centros urbanos e industriais (VAREJÃO, 2006). Teorias atuais
            explicam que no princípio do processo de formação da Terra as concentrações de
            CO2 na atmosfera eram extremamente elevadas em razão das frequentes atividades
            vulcânicas (DONN, 1978). Com o passar dos séculos, o CO2 foi depositado como
            calcários pelas algas marinhas. Esse processo de transferência teve duas fases: a
            primeira, a aproximadamente 600 milhões de anos, pelos protozoários calcários e
            foraminíferos. A segunda, por volta de 350 milhões de anos atrás, pela
            proliferação de pteridófitos. Todavia, no período Cretáceo; a 100 milhões de anos,
            a concentração de CO2 na atmosfera da Terra ainda era muito alta: em torno de 10
            vezes acima das concentrações atuais. Com o declínio das erupções vulcânicas,
            houve uma vertiginosa diminuição da concentração CO2 na atmosfera, já muito
            próxima dos níveis atuais (POSTEL, 1986).
            As ações antrópicas ocorridas nos séculos XX e XXI ocasionaram um
            acréscimo de 27% nos níveis de CO2 na atmosfera, provocado pela elevada
            queima de combustíveis fósseis (uma vez que 75% da energia primária do planeta
            origina-se desta fonte: 32% petróleo, 26% carvão e 17% gás), redução das
            florestas e mudanças no uso do solo (PACHECO e HELENE, 1990).
            O CO2 presente na atmosfera advém dos seguintes fatores: primeiramente,
            da combustão dos combustíveis fósseis e da produção de cimento que juntos
            liberam aproximadamente 5,5Gt (Giga Toneladas – bilhões de toneladas) de
            carbono a cada ano; posteriormente, as superfícies dos mares, que liberaram 90Gt 
            e por último, o desmatamento das florestas tropicais, que lançam anualmente
            1,6Gt de carbono no ar. Porém, as florestas temperadas restantes retiram cerca de
            1,8Gt e os oceanos aproximadamente 92Gt (BAIRD, 2002; LLOYD e TAYLOR,
            1994).
            O subsolo produz CO2 a partir da decomposição da matéria orgânica, pela
            ação de organismos heterotróficos e pela respiração das próprias raízes (CLARK e
            PAUL, 1996). O carbono estocado varia de acordo com o tipo de solo; nos
            argilosos, os microrganismos atuam mais intensamente nos períodos de chuva,
            produzindo CO2 em maior escala que os solos mais arenosos. (GIONGO et al.,
            2011). A transferência de CO2 do solo para a atmosfera é influenciada por fatores
            como a variações da temperatura - do solo ou do ar - e da umidade do solo, pois
            estes fatores exercem influência nos processos microbianos, alterando a emissão
            de CO2 à atmosfera (SOUZA COSTA et al., 2008).
            No pantanal, a drenagem da água no solo altera os fluxos de CO2. A
            topografia é um fator determinante para a drenagem lenta da água do solo, além
            disso, a precipitação local e a inundação regional criam condições que diminuem a
            difusividade do CO2 no solo, um ciclo de inundação mais úmido, geram
            concentrações de CO2 no solo maiores (LATHUILLIÈRE, et al, 2017)
            Os ecossistemas florestais representam cerca de 90% da biomassa global,
            apresentando um alto coeficiente de retenção de carbono, comparando com outros
            tipos de vegetação (BARRETO, FREITAS e PAIVA 2009). As florestas possuem
            entre 20 e 100 vezes mais concentração de carbono por unidade de área,
            comparando a terras ocupadas por agricultura ou pastagens, uma vez que no
            desmatamento o carbono contido naturalmente na vegetação e no solo é liberado
            para a atmosfera em forma de CO2. (PACHECO e HELENE, 1990).
            À medida que a vegetação se desenvolve, grande quantidade de gás
            carbônico é absorvido naturalmente pelas plantas pelo processo de fotossíntese,
            no qual o carbono é fixado na matéria lenhosa da floresta; assim, 500Gt de
            carbono é estocada pelos vegetais anualmente (YU, 2004). É inegável que as
            florestas são fundamentais para um estoque equilibrado de carbono na terra, pois é
            onde se concentra muito mais carbono do que na atmosfera. (HOUGHTON,
            1994).
            Estudos de fluxos de CO2 em florestas tropicais úmidas demostram que
            tais ecossistemas apresentam os maiores fluxos de CO2, (MALHI et al., 1998). Os
            pulsos de inundação que ocorrem sazonalmente no Pantanal mato-grossense
            interferem no balanço de carbono. Estudos apresentaram sazonalidade nos fluxos 
            de CO2 e CH4 com valores máximos durante o início e o final do ciclo de
            alagamentos (DALMAGRO et al, 2018) e diminuição na concentração de CO2
            com o aumento do conteúdo de água no solo, como resultado da diminuição da
            respiração e a atividade microbiana do solo (PEREIRA et al, 2009).
            O CO2 que emerge do subsolo é proveniente da respiração de raízes das
            plantas (respiração autotrófica - Ra) e da respiração de organismos do solo
            (respiração heterotrófica - Rh). O material orgânico em decomposição sobre o
            solo também pode ser inserido neste ciclo (FIGURA 1) (KIRSCHBAUM et al.,
            2001). 
                    A troca líquida de CO2 (NEE) resulta do equilíbrio entre os seguintes
            processos: respiração heterotrófica (Rh) e produção primária líquida (NPP) -
            (equação 01 e 03). A respiração heterotrófica refere-se ao carbono perdido pelos
            organismos em ecossistemas que não são as plantas. A NPP consiste na produção
            primária bruta (GPP) menos a quantidade de carbono que as próprias plantas
            respiram (Ra) - (equação 02). A produção primária bruta (GPP) refere-se à
            quantidade total de carbono fixado no processo de fotossíntese por plantas em um
            ecossistema (KIRSCHBAUM et al., 2001).</p>
            </div>
        </div>
      </div>  
    </body>
</html>