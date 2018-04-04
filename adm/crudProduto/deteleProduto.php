<?php
require_once '../../dao/ProdutoDao.php';
$produtoDao = new ProdutoDao();

if(isset($_POST['id'])){
   $id = $_POST['id'];
   echo $produtoDao->deletarProduto($id);
}
header("Location:../crudEvento.php");

