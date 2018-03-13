<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/dao/ConexaoDao.php';

class ClienteDao {
    public function atualizarCliente($cliente){
        $con = ConexaoDao::getConexao();
        $query = "UPDATE cliente SET nome=?, email=?, senha=? WHERE idCliente=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sssi", $cliente['nome'], $cliente['email'], $cliente['senha'], $cliente['idCliente']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function inserirCliente($cliente){
        $con = ConexaoDao::getConexao();
        $query = "INSERT INTO cliente VALUES (NULL,?,?,?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sss", $cliente['nome'], $cliente['email'], $cliente['senha']);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function deletarCliente($idCliente){
        $con = ConexaoDao::getConexao();
        $query = "DELETE FROM cliente WHERE idCliente=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idCliente);
        if($stmt->execute()===TRUE){
            $stmt->close();
            $con->close();
            return TRUE;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function getClienteById($idCliente){
        $con = ConexaoDao::getConexao();
        $query = "SELECT * FROM cliente WHERE idCliente=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $idCliente);
        if($stmt->execute()===TRUE){
            $result = $stmt->get_result();
            $arrayCliente = $result->fetch_assoc();
            $stmt->close();
            $con->close();
            return $arrayCliente;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
    public function pesquisarClientes($cliente){
        $con = ConexaoDao::getConexao();
        $query = "SELECT * FROM cliente WHERE nome LIKE '%{$cliente['nome']}%'";
        $stmt = $con->prepare($query);
        if($stmt->execute()===TRUE){
            $result = $stmt->get_result();
            $array = $result->fetch_all(MYSQLI_ASSOC);
            $stmt->close();
            $con->close();
            return $array;
        }else{
            $erro = $stmt->errno.' - '.$stmt->error;
            return $erro;
        }
    }
    
}