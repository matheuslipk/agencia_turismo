<?php

class ConexaoDao{
    public static function getConexao(){
        $host='localhost';
        $username ='agencia_turismo';
        $passwd='123456';
        $dbname='agencia_turismo';
        
        $con = new mysqli($host, $username, $passwd, $dbname);
        $con->set_charset("utf-8");
        return $con;
    }
}