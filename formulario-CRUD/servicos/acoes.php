<?php

//Classe para realizar operaçoes no banco de dados
require 'conexaoDB.php';

declare(strict_type=1);

class Operacoes extends ConexaoDB{

    //Metodo para inserir dados ao banco de dados
    public function inserir(string $nome, string $descricao): int 
    {

        $sql = 'INSERT INTO produto (nome, descricao) VALUES(?, ?)';
        
        $prepare = $this->getConectar()->prepare($sql);
        
        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $descricao);
        
        $prepare->execute();

        return $prepare->rowCount();
        
    }

    //Metodo para deletar dados do banco de dados
    public function deletar(int $id): int
    {

        $sql = 'DELETE FROM produto WHERE id = ?';

        $prepare = $this->getConectar()->prepare($sql);
        
        $prepare->bindParam(1, $id);

        $prepare->execute();

        return $prepare->rowCount();

    }

    //Metodo para atualizar dados do banco de dados
    public function atualizar(string $nome, string $descricao, int $id): int
    {
        $sql = 'UPDATE produto SET nome = ?, descricao = ? WHERE id = ?';

        $prepare = $this->getConectar()->prepare($sql);
        
        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $descricao);
        $prepare->bindParam(3, $id);

        $prepare->execute();

        return $prepare->rowCount();
    }

}

//teste dos metodos
/*
$metodo = new Operacoes();

$metodo->inserir('eletronico', 'roteador');*/