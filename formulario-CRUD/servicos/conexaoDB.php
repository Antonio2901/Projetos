<?php

//Classe para realizar a conexao com o banco de dados
class ConexaoDB {

    private $conexao;

    public function __construct() {

        try {
            $this->conexao = new PDO('mysql:mysql=localhost;dbname=loja', 'mestre', '123456');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }        

    }

    //Metodo para executar a conexao 
    public function getConectar() {

        return $this->conexao;
    }
    
}