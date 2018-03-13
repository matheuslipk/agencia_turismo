<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/dao/ConexaoDao.php';

class TipoArquivoDao {
    public function inserirTipoArquivo($tipoArquivo){
        $con = ConexaoDao::getConexao();
        $query = "INSERT INTO tipo_arquivo VALUES (NULL,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $tipoArquivo['descricao']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function deletarTipoArquivo($idTipoArquivo){
        $con = ConexaoDao::getConexao();
        $query = "DELETE FROM tipo_arquivo WHERE idTipoArquivo=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idTipoArquivo);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function getTiposArquivo(){
        $con = ConexaoDao::getConexao();
        $query = "SELECT * FROM tipo_arquivo";
        $stmt = $con->prepare($query);
        if($stmt->execute()===TRUE){
            $result = $stmt->get_result();
            $arrayTipoArquivos = $result->fetch_assoc();
            $stmt->close();
            $con->close();
            return $arrayTipoArquivos;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
     
}