<?php
/**
    $cont = 0;
    while ($cont < 10){
        echo "Cont : {$cont} <br>";
        $cont++;
    }
 * 
 */
?>

<!doctype html>
<html>
    <head>
        <title>while</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <ul>
            <?php
            $cont = 0;
            while ($cont < 30){
                if($cont > 5 && $cont <= 20){
            ?>
                <li><?= $cont?></li>
            <?php
                }
                $cont++;
            }    
            ?>
        </ul>
    </body>
</html>
