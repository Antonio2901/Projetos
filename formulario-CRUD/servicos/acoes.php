<?php

//Classe para realizar operaçoes no banco de dados
require 'conexaoDB.php';

declare(strict_type=1);

class Operacoes extends ConexaoDB {

    //Metodo para inserir dados ao banco de dados
    public function insert(string $nome, string $descricao): int 
    {

        $sql = 'INSERT INTO produto (nome, descricao) VALUES(?, ?)';

        $prepare = $this->getConectar()->query($sql);
        
        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $descricao);

        return $prepare->rowCount();

    }

    //Metodo para deletar dados do banco de dados
    public function delete(int $id): int
    {

        $sql = 'DELETE FROM produto WHERE id = ?';

        $prepare = $this->getConectar()->query($sql);
        
        $prepare->bindParam(1, $id);

        return $prepare->rowCount();

    }

    //Metodo para atualizar dados do banco de dados
    public function update(string $nome, string $descricao, int $id): int
    {
        $sql = 'UPDATE produto SET (nome = ?, descricao = ?) WHERE id = ?';

        $prepare = $this->getConectar()->query($sql);
        
        $prepare->bindParam(1, $nome);
        $prepare->bindParam(2, $descricao);
        $prepare->bindParam(3, $id);

        return $prepare->rowCount();
    }

}

//teste dos metodos

$metodo = new Operacoes();
echo $metodo->insert("Higiene", "Papel Higiênico");