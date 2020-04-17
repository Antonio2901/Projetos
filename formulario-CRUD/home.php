<?php

//Codigo que exibi os produtos cadastrado em uma tabela

//Arquivo requisitado para usar o codigo
require_once 'servicos/conexaoDB.php';

//Instanciamento de classes
$conectar = new ConexaoDB();

?>
<!--Codigo HTML para exibir a tabela de dados-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Produtos</title>
    </head>
    <body>
        <?php
        
        //Conectando ao banco de dados
        $sql = 'SELECT * FROM produto';

        $aux = $conectar->getConectar()->query($sql);

        $totalDados = $aux->rowCount();
        
        //Condicional para exibir a tabela
        if( $totalDados == 0) {
        
        ?>
            <!--Tabela de dados-->
            <div class = "tabela">
                <h1>Produtos</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Descrição</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td><a href = "editar.php"><button>Editar</button></a></td>
                            <td><a href = "servicos/apagar.php"><button>Apagar</button></a></td>
                        </tr>
                    </tbody>        
                </table>
                <a class = "btn" href = "adicionar.php"><button>Adicionar</button></a>
            </div>
        <?php
        }else{

        ?>
            <div class = "tabela">
                <h1>Produtos</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Descrição</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    //Operação para passar os dados do banco de dados para tabela
                    $dados = $aux->fetchAll();
                    
                    foreach ($dados as $key => $value) {

                    ?>
                        <tr>
                            <td><?php echo $value['nome']; ?></td>
                            <td><?php echo $value['descricao']; ?></td>
                            <td><a href = "editar.php"><button>Editar</button></a></td>
                            <td><a href = "servicos/apagar.php"><button>Apagar</button></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>        
                </table>
                <a class = "btn" href = "adicionar.php"><button>Adicionar</button></a>
            </div>
        <?php
        }
        ?>
    </body>
</html>