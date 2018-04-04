<?php
require_once '../dao/ProdutoDao.php';

$produtoDao = new ProdutoDao();
$produtos = $produtoDao->getAllProdutoRead();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        
        <link href="../css/bootstrap-select.css" type="text/css" rel="stylesheet"/>
        <title>Novo Evento</title>


    </head>
    <body style="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Administrador</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="newEvento.php">Novo Evento <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="uploadImage.php">Nova Foto</a>
                    <a class="nav-item nav-link" href="#">Gerenciar Eventos</a>
                    <b><a class="nav-item nav-link" href="../index.html">Ir Para o Site</a></b>
                </div>
            </div>
        </nav>
    <center>
        <div style="width: 80%;margin-top: 30px" class="px-4 py-3" >               
            <table class="table">
                <tr>
                    <td>Título</td>
                    <td>Quantidade</td>
                    <td>Preço</td>
                    <td> </td>
                    <td> </td>
                </tr>
                <?php foreach ($produtos as $produto) { ?>
                <tr>
                
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['quantDisponivel'] ?></td>
                    <td><?= $produto['preco'] ?></td>
                    <td>
                        <form method="post" action="crudProduto/deteleProduto.php">
                            <input type="hidden" name="id" value="<?= $produto['idProduto'] ?>">
                            <button class="btn btn-danger" >Deletar</button>
                        </form>
                    </td>
                    <td>
                        <form>
                            <input type="hidden" name="id" value="<?= $produto['idProduto'] ?>">
                            <button class="btn btn-info" >Editar</button>
                        </form>
                    </td>
                </tr>
                
                <?php } ?>
            </table>
        </div>
    </center>
</body>
</html>