<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root.'/dao/ProdutoDao.php';

$produtoDao = new ProdutoDao();

$evento['idProduto'] = $_POST['id'];
$evento['idTipoProduto'] = $_POST['tipo'];
$evento['nome'] = $_POST['titulo'];
$evento['preco'] = $_POST['preco'];
$evento['quantDisponivel'] = $_POST['quantidade'];

$evento['descricao'] = "";
if (isset($_POST['descricao'])) {
    $evento['descricao'] = $_POST['descricao'];
}
$evento['incluso']="";
if (isset($_POST['incluso'])) {
    $evento['incluso'] = $_POST['incluso'];
}
if($produtoDao->atualizarProduto($evento)){
    
}



header("Location:../crudEvento.php");




