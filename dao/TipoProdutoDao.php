<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/dao/ConexaoDao.php';

class TipoProdutoDao {
    public function inserirTipoProduto($tipoProduto){
        $con = ConexaoDao::getConexao();
        $query = "INSERT INTO tipo_produto VALUES (NULL,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $tipoProduto['nome']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function deletarTipoProduto($idTipoProduto){
        $con = ConexaoDao::getConexao();
        $query = "DELETE FROM tipo_produto WHERE idTipoProduto=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idTipoProduto);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function getTiposProduto(){
        $con = ConexaoDao::getConexao();
        $query = "SELECT * FROM tipo_produto";
        $stmt = $con->prepare($query);
        if($stmt->execute()===TRUE){
            $result = $stmt->get_result();
            $arrayTipoProduto = $result->fetch_assoc();
            $stmt->close();
            $con->close();
            return $arrayTipoProduto;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
     
}