<?php
    $arrayIds = [];
    
    if(filter_input(INPUT_POST, "btnSubmit", FILTER_SANITIZE_STRING)){
        $checkboxChecked = filter_input(INPUT_POST,"ckUsuarios", FILTER_SANITIZE_NUMBER_INT,FILTER_REQUIRE_ARRAY); 
        
        foreach ($checkboxChecked as $ck) {
            $arrayIds[] = $ck;
        }
        
    }
    
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Multiple Checkbox</title>
        <meta charset="utf-8" />     
    </head>
    <body>
        <div style = "padding: 10px; background-color: #EEE;">
            <!--for(...){}-->
            <form method="post">
                <label>
                    <input type="checkbox" name="ckUsuarios[]" value="1">
                    Angélica   
                </label>
                <br>
                <label>
                    <input type="checkbox" name="ckUsuarios[]" value="2">
                    Bruno
                </label>
                <br>
                <label>
                    <input type="checkbox" name="ckUsuarios[]" value="3">
                    Guilherme
                </label>
                <br>
                <label>
                    <input type="checkbox" name="ckUsuarios[]" value="4">
                    Issaq   
                </label>
                <br>
                <label>
                    <input type="checkbox" name="ckUsuarios[]" value="5">
                    Rosana
                </label>
                <br>
                <input type="submit" name="btnSubmit" value="Enviar" style="padding:5px;"/>
            </form>
        </div>
        <br>
        <div style = "padding: 10px; background-color: #EEE;">
            <?php
                for($i = 0; $i < count($arrayIds); $i++){
                    echo "<p>ID selecionado: {$arrayIds[$i]}</p>";
                }
            ?>
        </div>
    </body>
</html>
