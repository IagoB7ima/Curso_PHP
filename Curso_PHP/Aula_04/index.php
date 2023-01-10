<?php

    $adicao = 2+5;
    $subtracao = 5-2;
    $multiplicacao = 5*2;
    $divicao = 5/2;
?>
<html lang="pr-br">
    <head>
        <title>
            Operadores Matemáticos
        </title>    
        <meta charset="Utf-8">
    </head>
    <body>
        <p>2+5 = <?=$adicao?></p>
        <p>2-5 = <?=$subtracao?></p>
        <p>2*5 = <?=$multiplicacao?></p>
        <p>2/5 = <?=$divicao?></p>
        <hr>
        <p><?= $adicao * $divicao?></p>
    </body>    
</html>