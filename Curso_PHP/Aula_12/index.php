<?php

    $arrayFrutas = [
        1 => "Abacaxi",
        2 => "Banana",
        3 => "Goiaba",
        4 => "Maça",
        5 => "Uva"
    ];
    /**
    foreach ($arrayFrutas as $key => $v){
        echo "key: {$key} => Value: {$v} . <br>";
    }
     * 
     */
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Array</title>
        <meta charset="utf-8"/>    
    </head>
    <body>
        <ul>
            <?php
            foreach ($arrayFrutas as $valor) {
                ?>    
                <li><?= $valor?></li>
                <?php
            }
            ?>
        </ul>
    </body>
    
</html>