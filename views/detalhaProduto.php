<?php ?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Rígel">

        <title>EmpreenderTur!</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/stylish-portfolio.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body id="page-top">

        <!-- Portfolio -->
        <section class="content-section" id="portfolio">
            <div class="container">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Destinos visitados</h3>
                    <h2 class="mb-5">Veja as atividades que já fizemos!</h2>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Launch demo modal
                </button>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Descrição</a></li>
                                    <li><a data-toggle="tab" href="#menu1">Incluso...</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Galeria</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                        <h3>HOME</h3>
                                        <p>Some content.</p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h3>Menu 1</h3>
                                        <p>Some content in menu 1.</p>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
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
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


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
                <p class="text-muted small mb-0">Copyright; EmpreenderTur 2018</p>
                <p class="text-muted small mb-0">Copyright; Rígel 2018</p>
            </div>
        </footer>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="../js/stylish-portfolio.min.js"></script>
        <script src="../js/style-maps.js"></script>

    </body>

</html>
