<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/dao/ConexaoDao.php';

class ArquivoProdutoDao {
    public function inserirArquivoProduto($arquivoProduto){
        $con = ConexaoDao::getConexao();
        $query = "INSERT INTO arquivo_produto VALUES (?,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ii", $arquivoProduto['idProduto'], $arquivoProduto['idArquivo']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function deletarArquivoProduto($arquivoProduto){
        $con = ConexaoDao::getConexao();
        $query = "DELETE FROM arquivo_produto WHERE idProduto=? AND idArquivo=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ii", $arquivoProduto);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
     
}