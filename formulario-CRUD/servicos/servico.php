<?php

//Codigo que executa as operações da classe Operacoes para alterar o banco de dados

//Arquivos requisitados para executar o codigo
require 'acoes.php';
require 'verificarEntradas.php';

//Instanciamento das classes
$alterar = new Operacoes();

$verificar = new Verificacao();

//Condicional para capturar o comando escolhido e executar uma alteração no banco de dados
if(isset($_GET['operacao']))
{
    //Condicional que permite executar o metodo para inserir dados ao banco de dados 
    if($_GET['operacao'] == 'inserir')
    {
        //Verificar sem o botão 'enviar' foi pressionado
        if(isset($_POST['btn-inserir']))
        {
            
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            
            //Funções para filtrar possiveis SQL Injection vindo da entrada de dados
            $nomeF = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS); 
            $descricaoF = filter_var($descricao, FILTER_SANITIZE_SPECIAL_CHARS);
            
            //Metodo para verificar se tem alguma irregularidade nos dados submetidos
            $resultadoNome = $verificar->verificarEntrada($nomeF);
            $resultadoDescricao = $verificar->verificarEntrada($descricaoF);
            
            //Condição para inserir os dados no banco de dados
            if ($resultadoNome == false and $resultadoDescricao == false) {
                
                $aux = $alterar->insert($nomeF, $descricaoF);
                if ($aux == 1) {
                    header('location:index.php?result=sucesso');
                
                }else {
                    header('location: index.php?result=erro');
                }

            }else{
                echo 'Erro ao inserir produto';
            }
        }
    }

}