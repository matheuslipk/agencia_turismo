<?php ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polaroid Stack to Grid Intro Animation | Demo: Spring | Codrops</title>
        <meta name="description" content="Demo of the tutorial on how to re-create a similar effect of the takeitapp.co website." />
        <meta name="keywords" content="responsive, grid, polaroid, animation, intro, web design, tutorial, responsive images, srcset" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="../css/square-loader.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
        <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            document.documentElement.className = 'js';
        </script>
    </head>
    <body>
        <div class="view">
            <section class="content-section" id="portfolio">
                <div class="container">
                    <div class="content-section-heading text-center">
                        <h3 class="text-secondary mb-0">Destinos visitados</h3>
                        <h2 class="mb-5">Veja as atividades que já fizemos!</h2>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-6">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-fluid" src="../img/portfolio-1.jpg" alt="">
                                    </div>

                                    <div class="item">
                                        <img class="img-fluid" src="../img/portfolio-1.jpg" alt="">
                                    </div>

                                    <div class="item">
                                        <img class="img-fluid" src="../img/portfolio-1.jpg" alt="">
                                    </div>
                                </div>


                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div id="titulo" class="col-lg-12">
                                    <h3> Viagem para Canoa Quebrada</h3>
                                </div>
                                <div id="descricao" class="col-lg-12">
                                    area2
                                </div>
                                <div id="preço" class="col-lg-12">
                                    area3
                                </div>
                            </div>
                            <!-- botão de comprar aqui -->
                        </div>


                    </div>

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
                            <p class="text-muted small mb-0">Copyright &copy; StarBit 2018</p>
                        </div>
                    </footer>
                </div><!-- /view -->
            </section>
        </div>
        <script src="../js/classie.js"></script>
        <script src="../js/dynamics.min.js"></script>
        <script src="../js/imagesloaded.pkgd.min.js"></script>
        <script src="../js/main_2.js"></script>
    </body>
</html>
