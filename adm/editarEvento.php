<?php
require_once '../dao/ArquivoDao.php';
require_once '../dao/TipoProdutoDao.php';
require_once '../dao/ProdutoDao.php';

if (!isset($_GET['id'])) {
    header("Location: /adm/crudEvento.php");
}

$id = $_GET['id'];

$produtoDao = new ProdutoDao();
$produto = $produtoDao->getProdutoById($id);


$arquivoDao = new ArquivoDao();
$arquivos = $arquivoDao->getAll();

$tipoProdutoDao = new TipoProdutoDao();
$tiposProduto = $tipoProdutoDao->getTiposProduto();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="../js/bootstrap-select.js"></script>
        <!-- include summernote css/js -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script>
            $(document).ready(function () {
                $('#txtEditor').summernote({
                    placeholder: 'Informe a Descrição do passeio',
                    tabsize: 2,
                    height: 200
                });
                $('#txtIncluso').summernote({
                    placeholder: 'Informe as atividades Inclusas no Pacote',
                    tabsize: 2,
                    height: 200
                });
            });


            function validarNumero(num) {

                var caracter = num.charAt(num.length - 1);
                if (!$.isNumeric(caracter)) {
                    if (caracter === ',') {
                        num = num.replace(',', '.');
                    }
                    else if (caracter === '.') {
                    } else {
                        num = num.replace(caracter, '');
                    }
                }
                num = num.replace(',', '.');
                $("#preco").val(num);

                if (!$.isNumeric(num)) {
                    $("#preco").val('');
                    alert("Digite apenas números");
                }

            }
        </script>
        <link href="../css/bootstrap-select.css" type="text/css" rel="stylesheet"/>
        <title>Novo Evento</title>


    </head>
    <body style="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Administrador</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="newEvento.php">Novo Evento <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="uploadImage.php">Nova Foto</a>
                    <a class="nav-item nav-link active" href="crudEvento.php">Gerenciar Eventos</a>
                    <b><a class="nav-item nav-link" href="../index.html">Ir Para o Site</a></b>
                </div>
            </div>
        </nav>
    <center>
        <h2>Editar Evento</h2>
        <form style="width: 80%;margin-top: 30px" class="px-4 py-3" method="post" action="crudProduto/editarEvento.php">               

            <div class="container-fluid">
                <div class="row">
                    <div class="form-group col-lg-8">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <label for="exampleInputPassword1">Título:</label>
                        <input type="text" class="form-control" value="<?= $produto['nome'] ?>" required="" name="titulo" id="exampleInputPassword1" placeholder="ex: Canoa Quebrada">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="exampleInputPassword1">Quanidade Disponível:</label>
                        <input type="text" class="form-control" required value="<?= $produto['quantDisponivel'] ?>" name="quantidade" id="exampleInputPassword1" placeholder="ex: 43">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="exampleInputPassword1">Preço:</label>
                        <input onkeyup="validarNumero(this.value)" class="form-control" required="" value="<?= number_format($produto['preco'], 2) ?>" name="preco" id="preco" placeholder="ex: 39.90" style="height: 50%">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="exampleFormControlSelect1">Tipo de Produto:</label>
                        <select class="form-control" id="exampleFormControlSelect1" value="<?= $produto['idTipoProduto'] ?>" name="tipo" required="" style="height: 50%">
                            <?php
                            foreach ($tiposProduto as $tipo) {
                                if ($tipo['idTipoProduro'] == $produto['idTipoProduto']) {
                                    echo "<option value='{$tipo['idTipoProduro']}' selected> {$tipo['nome']}</option>";
                                } else {
                                    echo "<option value='{$tipo['idTipoProduro']}'> {$tipo['nome']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="exampleFormControlSelect1">Selecione as Imagens:</label>
                        <select class="form-control selectpicker" name="imagens[]"   multiple>
                            <?php foreach ($arquivos as $arquivo) { ?>
                                <option value="<?= $arquivo['idArquivo'] ?>"> <?= $arquivo['idArquivo'] ?></option>
                            <?php } ?>
                        </select>
                    </div> 
                </div>
            </div>  



            <div class="row">   
                <div class="container">
                    <div class="row">
                        <h3>Descrição do Produto:</h3>
                        <div class="col-lg-12 nopadding">
                            <textarea id="txtEditor" name="descricao" ><?= $produto['descricao'] ?> </textarea> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">   
                <div class="container">
                    <div class="row">
                        <h3>Incluso No Produto:</h3>                                            
                        <div class="col-lg-12 nopadding">
                            <textarea id="txtIncluso" name="incluso"><?= $produto['incluso'] ?></textarea> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;margin-bottom: 30px;">
                <button type="submit" class="btn btn-primary">Salvar</button>

            </div>
        </form>
    </center>
</body>
</html>