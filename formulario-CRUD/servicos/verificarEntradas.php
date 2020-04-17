<?php

//Classe que verificar a entrada de dados
declare(strict_type=1);

class Verificacao{

    //Metodo para verificar se o dado fornecido é irregular ou não
    public function verificarEntrada(string $var): bool 
    {

        if(strlen($var) < 3 and strlen($var) > 40) {
        
            return true;
        
        }elseif (empty($var)) {
        
            return true;

        }

        return false;
    }


}

//teste metodos

//$metodo = new Verificacao();

//var_dump($metodo->verificarEntrada("antonio"));