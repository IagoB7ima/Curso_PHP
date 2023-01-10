<?php

     $arrayNotas = [
        "aluno1" => [
            "nome" => "Iago",
            "Nota" => 10
            ],
        "aluno2" => [
            "nome" => "Ana",
            "Nota" => 10
            ],
        "aluno3" => [
            "nome" => "Thais",
            "Nota" => 9.5
            ],
        "aluno4" => [
            "nome" => "Dougla",
            "Nota" => 8
            ],
    ];

    foreach ($arrayNotas as $aluno){
        foreach ($aluno as $chave => $valor){
            echo "{$chave} = {$valor} <br>";
        }
    }