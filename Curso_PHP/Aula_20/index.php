<?php

//    include_once("gravar.php");
//    Gravar("include", "file.txt");
//    
//    include_once("ler.php");
//    $text = Leitura("file.txt");

    require_once("gravar.php");
    Gravar("include", "file.txt");
    
    require_once("ler.php");
    $text = Leitura("file.txt");
    
?>

<!doctype html>
<html lang="pt_br">
    <head>
        <title>Include</title>
        <meta charset="utf-8"/>     
    </head>
    <body>
        <h1>
            <?php
            echo Leitura("file.txt");
            ?>
        </h1>
    </body>
</html>