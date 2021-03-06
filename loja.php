<?php
require_once './dao/ProdutoDao.php';
require_once './dao/ArquivoProdutoDao.php';
session_start();
$_SESSION['quant_produtos'] = 4;

$produtoDao = new ProdutoDao();
$produtos = $produtoDao->getAllProduto($_SESSION['quant_produtos']);





?>
<!DOCTYPE html>
<html  class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loja - EmpreenderTur</title>
        <link rel="shortcut icon" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/square-loader.min.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/stylish-portfolio.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <p class="title title--sub">Seu Destino está aqui<em>!</em></p>
            </div>
            <section class="page page--static">
                <div class="page__title">
                    <a href="index.html">
                        <img src="img/logo.png">
                    </a>
                    <h2 class="page__title-main">Os melhores destinos,com os preços mais amigavéis!</h2>
                    <p class="page__title-sub">Para aproveitar melhor o seu evento com tranquilidade ou mesmo aproveitar aquela viagem!</p>
                </div>
                <ul class="grid">

                    <?php foreach ($produtos as $produto) { ?>
                        <li class="grid__item">
                            <a class="grid__link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                <?php 
                                    $imagens = $produtoDao->getAllImagesById($produto["idProduto"]);
                                    $imagem = "1";
                                    
                                    foreach($imagens as $img){
                                        $imagem = $img["idArquivo"];    
                                    }
                                
                                ?>
                                
                                <img class="grid__img" src="img/eventos/%20<?= $imagem ?>.jpg" alt="Some image" />
                                <h3 class="grid__item-title"><?= $produto["nome"] ?></h3>
                            </a>
                            <a class="grid__link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                               <h3 class="grid__item-title" style="color: black">R$ <?= number_format($produto['preco'], 2) ?></h3>
                            </a>
                            
                            <button id="<?= $produto["idProduto"] ?>" type="button" class="btn btn-primary" onclick="dialog(this.id)" style="width: 100%" >
                                Conferir Oferta
                            </button>
                        </li>
                    <?php } ?>

                </ul>
                <div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>

                </div>
                              
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
                    <span class="button__text">Carregaaar</span>
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
        <script>
            function dialog(id) {
                $.get("php/detalhaHtml/getDialog.php", {id : id}).done(function (val) {
                    $("#exampleModalCenter").html(val);
                });

                $('#exampleModalCenter').modal('show');
            }
        </script>
        <script src="js/classie.js"></script>
        <script src="js/dynamics.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/main_2.js"></script>
    </body>
</html>
