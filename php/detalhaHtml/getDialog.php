<?php
require_once '../../dao/ProdutoDao.php';
header("Content-type: text/html; charset=utf-8");
function escrever(){
    $id = $_GET['id'];
    $produtoDao = new ProdutoDao();
    $produto = $produtoDao->getProdutoById($id);
    
    ?>
    
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"> <?php echo $produto["idProduto"]; ?></h5>
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
                                        <h3><?php echo $produto["nome"]; ?></h3>
                                        <p><?php echo $produto["descricao"]; ?></p>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h4><?php echo $produto["incluso"]; ?></h4>
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
                                                    <img class="img-fluid" width="100%" height="100%" src="../img/portfolio-1.jpg" alt="">
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



    <?php
}


escrever();

