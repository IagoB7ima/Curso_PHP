<?php

    /**function Ola($nome = "", $email = ""){
        return "Ola, meu nome é: {$nome} e meu e-mail é: {$email}";
    }
    
    $v = Ola("Iago", "iagonumero1@gmail.com");
    echo $v;
     * 
     */
     function Ajuste($p1,$p2){
         return (($p1 + $p2)/4);
     }
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Function</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1><?= Ajuste(3, 10);?></h1>
        <ul>
            <?php
            for($i = 0; $i < 10; $i++){
            ?>
            <li><?= Ajuste($i, $i+6);?></li>
            <?php
            }
            ?>
        </ul>
    </body>
</html>