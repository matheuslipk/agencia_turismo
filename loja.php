<?php
    
?>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Rígel">

        <title>Seja bem vindo a EmpreenderTur!</title>


        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/square-loader.min.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/loja.css"/>
        <!--[if IE]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script>
            document.documentElement.className = 'js';
        </script>
    </head>
    <body>
        <div class="view">
            <header class="header">

            </header>
            <section class="page page--mover">
                <div class="la-square-loader"><div></div></div>
            </section>
            <div class="title-wrap">
                <h1 class="title title--main"><img src="img/logo.png"></h1>
                <p class="title title--sub">Construa boas lembranças!</p>
            </div>
            <section class="page page--static">
                <div class="page__title">
                    <img src="img/logo.png">
                    <h2 class="page__title-main">Os melhores destinos,com os preços mais amigavéis!</h2>
                    <p class="page__title-sub">Para aproveitar melhor o seu evento com tranquilidade ou mesmo aproveitar aquela viagem!</p>
                </div>
                <ul class="grid">
                    <li class="grid__item">
                        <a class="grid__link" href="#">
                            <img class="grid__img" src="img/portfolio-1.jpg"/>
                            <h3 class="grid__item-title">Luís Correia - PI</h3>
                            <p class="grid__descricao">Conheça as praias mais belas do Piauí, em um percurso de 3 dias, com a melhor estadia!</p>
                        </a>
                    </li>
                    <li class="grid__item">
                        <a class="grid__link" href="#">
                            <img class="grid__img" src="img/portfolio-2.jpg"/>
                            <h3 class="grid__item-title">Teresina - PI</h3>
                            <p class="grid__descricao">Visite a primeira cidade projetada do Brasil e conheça seus locais históricos em um só dia!</p>
                        </a>
                    </li>
                    <li class="grid__item">
                        <a class="grid__link" href="#">
                            <img class="grid__img" src="img/portfolio-3.jpg"/>
                            <h3 class="grid__item-title">Sete Cidades - PI</h3>
                            <p class="grid__descricao">Conheça um dos berços da humanidade da Americana do Sul!</p>
                        </a>
                    </li>
                    <li class="grid__item">
                        <a class="grid__link" href="#">
                            <img class="grid__img" src="img/portfolio-4.jpg"/>
                            <h3 class="grid__item-title">Serra da Capivara - PI</h3>
                            <p class="grid__descricao">As belas naturais mais famosas do Piauí, vista de uma forma inesquecível!</p>
                        </a>
                    </li>
                </ul>
                <button class="button button--load" aria-label="Load more images">
                    <svg class="polaroid" width="100%" height="100%" viewBox="0 0 220 243" preserveAspectRatio="xMidYMid meet">
                    <rect class="polaroid__base" x="0" y="0" width="220" height="243" rx="5"></rect>
                    <rect class="polaroid__inner" x="16" y="20" width="189" height="149"></rect>
                    <g class="polaroid__loader">
                    <circle cx="61.5" cy="94.5" r="17.5"></circle>
                    <circle cx="110.5" cy="94.5" r="17.5"></circle>
                    <circle cx="159.5" cy="94.5" r="17.5"></circle>
                    </g>
                    </svg>
                    <span class="button__text">Veja mais!</span>
                </button>
            </section>
            <div class="device">
                <div class="device__screen"></div>
            </div>
            <button id="showgrid" class="button button--view" aria-label="Show me more">
                <svg width="100%" height="100%" viewBox="0 0 310 177" preserveAspectRatio="xMidYMid meet">
                <path fill="#FFFFFF" d="M159.875,174.481L306.945,27.41c2.93-2.929,2.93-7.678,0-10.606L292.803,2.661c-1.406-1.407-3.314-2.197-5.303-2.197c-1.989,0-3.896,0.79-5.303,2.197L154.572,130.287L26.946,2.661c-1.406-1.407-3.314-2.197-5.303-2.197c-1.989,0-3.897,0.79-5.303,2.197L2.197,16.804C0.733,18.269,0,20.188,0,22.107s0.732,3.839,2.197,5.303l147.071,147.071C152.197,177.411,156.945,177.411,159.875,174.481L159.875,174.481z" />
                </svg>
            </button>

            <!-- Footer -->
            <footer class="footer text-center">
                <div class="container">
                    <ul class="list-inline mb-5">
                        <li class="list-inline-item">
                            <a class="social-link rounded-circle text-white mr-3" href="#">
                                <i class="icon-social-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-link rounded-circle text-white mr-3" href="#">
                                <i class="icon-social-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-link rounded-circle text-white" href="#">
                                <i class="icon-social-github"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-0">Copyright &copy; EmpreenderTur 2018</p>
                    <p class="text-muted small mb-0">Copyright &copy; Rígel 2018</p>
                </div>
            </footer>
        </div><!-- /view -->
        <script src="js/classie.js"></script>
        <script src="js/dynamics.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/main_2.js"></script>
        
