<?php

    //$nome = "Iago Batista";

    //echo substr($nome, 0,6); //Escolhe o intervalo de caracteres a ser exibido
    
    //echo strtolower("Ola como vai?"); //Mostra os caracteres em letras minusculas
    
    //echo strtoupper("iago batista"); //Mostra os caracteres em letras  maiusculas
    
    //$msg = strip_tags("<h1>Bem-vindo</h1> acesse o <a href=''><b>link</b></a>","<a> <b> <h1>"); //Da permição as tags html que serão utilizadas
    
    //$comida = "Banana, Maça, Pera, Pva";
    //$alt = str_replace("Banana", "Morango", $comida);//Permite trocar o valor da variável por outra 
    //echo $alt;
    
    //$comida = "Banana, Maça, Pera, Pva";
    //$alt = str_ireplace("banana", "Morango", $comida);//Permite trocar o valor da variável por outra, prem não case sensitive 
    //echo $alt;
    
    //$nome = "Iago Batista de Lima";
    //$ex = explode(" ", $nome); //Transforma uma variavel em um arrey de string e exibe as palavras de acor do com o indereço do array
    //echo $ex[0];
    
    $nome = "Iago batista de lima";
    echo strlen($nome); //Retorna o numero de caracteres
    
    if(strlen($nome)<=10){
        echo "Valido";
    } else {
        echo "Invalido";
}