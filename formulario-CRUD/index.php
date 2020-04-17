<?php

//Arquivo requisitado para iniciar o codigo
require 'home.php';





//////////////////////////////////////////////////////
//testes dos metodos

/*require 'servicos/conexaoDB.php';

//$pdo = new PDO('mysql:mysql=localhost;dbname=loja', 'mestre', '123456');

$conectar = new ConexaoDB();

$sql = 'SELECT * FROM produto';

$sql = $conectar->getConectar()->query($sql);

$totalDados = $sql->rowCount();

$dados = $sql->fetchAll();

$i = 0;

//while($i < $totalDados){
    foreach ($dados as $key => $value) {

        echo $value['nome']."<br>";
        echo $value['descricao']."<br>";
    
    }

    //$i++;
//}

/*foreach ($total as $key => $value) {

    echo $value['nome']."<br>";
    echo $value['descricao']."<br>";

}
