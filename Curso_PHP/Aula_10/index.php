<?php
    /**
    $i = 0;
 
    do {
        echo "Valor: {$i} <br>";
        //$i++;
    } while($i == -1);
     * 
     */
?> 
<!doctype html>
<html>
    <head>
        <title>While</title>
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <?php
                $i = 0;
                do {
                    echo "Valor: {$i} <br>";
                    $i++;
                } while($i <= 10);
            ?>
        </ul>
    </body>
</html>