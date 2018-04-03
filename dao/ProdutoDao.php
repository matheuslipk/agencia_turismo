<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/dao/ConexaoDao.php';

class ProdutoDao {
    public function atualizarProduto($produto){
        $con = ConexaoDao::getConexao();
        $query = "UPDATE produto SET idTipoProduto=?, nome=?, quantDisponivel=?, "
                . "preco=?, descricao=?, incluso=? WHERE idProduto=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("isidssi", $produto['idTipoProduto'], $produto['nome'], 
                $produto['quantDisponivel'], $produto['preco'], $produto['descricao'],$produto['incluso'], $produto['idProduto']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function inserirProduto($produto){
        $con = ConexaoDao::getConexao();
        $query = "INSERT INTO produto VALUES (NULL,?,?,?,?,?,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("isids", $produto['idTipoProduto'], $produto['nome'], 
                $produto['quantDisponivel'], $produto['preco'], $produto['descricao'],$produto['incluso']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function deletarProduto($idProduto){
        $con = ConexaoDao::getConexao();
        $query = "DELETE FROM produto WHERE idProduto=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idProduto);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function getProdutoById($idProduto){
        $con = ConexaoDao::getConexao();
        $query = "SELECT * FROM produto WHERE idProduto=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idProduto);
        if($stmt->execute()===TRUE){
            $result = $stmt->get_result();
            $arrayProduto = $result->fetch_assoc();
            $stmt->close();
            $con->close();
            return $arrayProduto;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
   public function getAllProduto($quantProdutos){
      $quantPorVez = 4;       
      $temp = $quantProdutos-$quantPorVez;
      $con = ConexaoDao::getConexao();
      $query = "SELECT * FROM produto LIMIT ?,?";
      $stmt = $con->prepare($query);
      $stmt->bind_param("ii", $temp, $quantProdutos);
      if($stmt->execute()===TRUE){
         $result = $stmt->get_result();
         $arrayProduto = $result->fetch_all(MYSQLI_ASSOC);
         $stmt->close();
         $con->close();
         return $arrayProduto;
      }else{
         $erro = $stmt->errno.' - '.$stmt->error;
         return $erro;
      }
   }

}