<!--Codigo para editar os dados do banco de dados-->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        
        <h1>Editar Produtos</h1>
        
        <!--Formulario para editar os dados-->
        <form action = "servicos/servico.php?operacao=editar" method = "POST">
            <p>Nome:<input type = "text" name = "nome"></p>
            <p>Descrição:<input type = "text" name = "descricao"></p>
            <input type="hidden" name = "id" value = "<?php echo $_GET['id']; ?>">
            <button type = "submit" name = "btn-editar">Enviar</button>
        </form>
            <a href="index.php"><button type = "submit">Cancelar</button></a>
    </body>
</html>