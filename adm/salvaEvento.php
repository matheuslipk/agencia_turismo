<?php

require_once '../dao/ProdutoDao.php';
require_once '../dao/ArquivoProdutoDao.php';

$produtoDao = new ProdutoDao();
$arquivoProdutoDao = new ArquivoProdutoDao();


$root = $_SERVER['DOCUMENT_ROOT'];


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
if($produtoDao->inserirProduto($evento)){
    
}

$id = $produtoDao->getLastProduto()['idProduto'];

if (isset($_POST['imagens'])) {
    echo 'entrou';
    $imagens = $_POST['imagens'];
    foreach ($imagens as $imagem) {
        $arquivoproduto['idProduto'] = $id;
        $arquivoproduto['idArquivo'] = $imagem;
        echo $id;
        echo $imagem;
        $arquivoProdutoDao->inserirArquivoProduto($arquivoproduto);
    }
}

header("Location:newEvento.php");




