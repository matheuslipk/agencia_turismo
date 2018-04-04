<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/dao/ConexaoDao.php';

class ArquivoDao {
    public function atualizarArquivo($arquivo){
        $con = ConexaoDao::getConexao();
        $query = "UPDATE arquivo SET link=?, descricao=? WHERE idArquivo=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sss", $arquivo['link'], $arquivo['descricao'], $arquivo['idArquivo']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function inserirArquivo($arquivo){
        $con = ConexaoDao::getConexao();
        $query = "INSERT INTO arquivo VALUES (?,?,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sss",$arquivo['idArquivo'] , $arquivo['link'], $arquivo['descricao']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function deletarArquivo($idArquivo){
        $con = ConexaoDao::getConexao();
        $query = "DELETE FROM arquivo WHERE idArquivo=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idArquivo);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function getArquivoById($idArquivo){
        $con = ConexaoDao::getConexao();
        $query = "SELECT * FROM arquivo WHERE idArquivo=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idArquivo);
        if($stmt->execute()===TRUE){
            $result = $stmt->get_result();
            $arrayArquivos = $result->fetch_assoc();
            $stmt->close();
            $con->close();
            return $arrayArquivos;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function getAll(){
        $con = ConexaoDao::getConexao();
        $query = "SELECT * FROM arquivo";
        $stmt = $con->prepare($query);
        if($stmt->execute()===TRUE){
            $result = $stmt->get_result();
            $arrayArquivos = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            $con->close();
            return $arrayArquivos;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
        
}