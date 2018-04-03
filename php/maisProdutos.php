<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root."/dao/ProdutoDao.php";

if(session_status()!=2){
   session_start();
}
$_SESSION['quant_produtos'] +=4;

$produtoDao = new ProdutoDao();
$produtos = $produtoDao->getAllProduto($_SESSION['quant_produtos']);
foreach ($produtos as $produto){
   ?>
<li class="grid__item" style="opacity: 1">
    <a class="grid__link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
        <img class="grid__img" src="img/photos/1.jpg" alt="Some image" />
        <h3 class="grid__item-title"><?= $produto["nome"] ?></h3>
    </a>
    <a class="grid__link" href="#" data-toggle="modal" data-target="#exampleModalCenter">
       <h3 class="grid__item-title" style="color: black">R$ <?= number_format($produto['preco'], 2) ?></h3>
    </a>

    <button id="<?= $produto["idProduto"] ?>" type="button" class="btn btn-primary" onclick="dialog(this.id)" style="width: 100%" >
        Conferir Oferta
    </button>
</li>
<?php
}


