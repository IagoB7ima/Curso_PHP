<?php
    $arrayNome = array("Perdro","Tiago","André","Mateus","Felipe","João","Judas Iscariotes","Judas Tadeu","Tiago","Tomé","Bartolomeu","Simão");    
    
    
    /**
    for($i = 0; $i < count($arrayNome); $i++){
        echo $arrayNome[$i] . "<br>";
    }
    echo $i;
     * 
     */
?>

<!doctype html>
<html>
    <head>
        <title>Array</title>
        <meta charset="utf-8">
    </head>
    <body>
        <select id="slProfessores" name="slProfessores">
            <?php 
            for($i = 0; $i < count($arrayNome); $i++){
            ?>
            <option value="<?= $i; ?>"><?= $arrayNome[$i] ?></option>
            <?php
            }
            ?>
        </select> 
        <button onclick="alert(document.getElementById('slProfessores').value);">Selecionar</button>
    </body>
</html>