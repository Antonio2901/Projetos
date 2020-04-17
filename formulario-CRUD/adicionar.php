<!--Codigo html para exibir um formulario para entrada de dados-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        
        <h1>Inserir Produtos</h1>
        
        <!--Formulario para entrada de dados-->
        <form action = "servicos/servico.php?operacao=inserir" method = "POST">
            <p>Nome:<input type = "text" name = "nome"></p>
            <p>Descrição:<input type = "text" name = "descricao"></p>
            <button type = "submit" name = "btn-inserir">Enviar</button>
        </form>
            <a href="index.php"><button type = "submit">Cancelar</button></a>
    </body>
</html>