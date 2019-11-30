<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.


-->
<html>
    <head>

        <title>Clima</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="js/clima.js"></script>
        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de Informções Climáticas."/>
        <meta NAME="ABSTRACT" CONTENT="Informações Climáticas"/>
        <meta name="keywords" content="Clima, Temperatura, Pressão do Ar, Umidade, Temperatura Mínima, Temperatura
              Máxima, Velocidade do Vento, Pressão do Ar, Clima para Brusque, Pressão do ar para Brusque, Velocidade do vento para
              Brusque, Umidade para Brusque, Temperatura para Brusque, Por do Sol para Brusque, Amanhecer para Brusque."/>
        <meta NAME="title" CONTENT="Clima" />
        <meta NAME="identifier-url" content="https://caroline-clima-senai.herokuapp.com/" />
        <meta NAME="author" content="Caroline" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="caroline_silva1@estudante.sc.senai.br"/>


        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://caroline-clima-senai.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Clima" />
        <meta property="og:title" content="Clima" />
        <meta property="og:description" content="Site de Informções Climáticas.

              " />
        <meta property="og:image" content="https://caroline-clima-senai.herokuapp.com/img/icones/02n.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de Informções Climáticas" />
        <meta name="twitter:title" content="Clima" />


    </head>
    <body>

        <div class="row">

            <div class="col-md-12">
                <div class="p-4 mb-2 bg-danger text-white"></div>
                <div class="jumbotron">
                    <h4>Temperatura SC
                        <span id="temperatura"></span></h1>
                        <p>

                            <span id="situacao"></span>
                            <img id="icone" src="img/icones/02d.png"/>
                        </p>

                        <h4>

                            <h4>
                                Pressão do Ar: <span id="pressaoAr">10</span>
                                <p>
                                    <img src="img/icones/02n.png"/>
                                </p>
                            </h4>

                            <h4>
                                Umidade: <span id="umidade">100%</span>
                                <p>
                                    <img src="img/icones/01d.png"/>
                                </p>
                            </h4>


                            <h4>
                                Temperatura Mínima: <span id="tempminima">294.82</span>
                                <p>
                                    <img src="img/icones/04n.png"/>
                                </p>
                            </h4>
                            <h4>
                                Temperatura Máxima: <span id="tempmaxima">296.48</span>
                                <p>
                                    <img src="img/icones/09d.png"/>
                                </p>
                            </h4>

                            <h4>
                                Velocidade do vento: <span id="vento">1.5</span>
                                <p>
                                    <img src="img/icones/01n.png"/>
                                </p>
                            </h4>
                            <h4>
                                Amanhecer: <span id="amanhecer"></span>

                            </h4>

                            <h4>
                                Por do Sol: <span id="pordosol"></span>

                            </h4>
                            </div>
                            </div>
                            </div>





                            </body>
                            </html>
