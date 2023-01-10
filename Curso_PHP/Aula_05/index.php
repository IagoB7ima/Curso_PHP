<?php
    
    define("min", 17);
    define("max", 45);
    
    $idade = 16;
    
    echo "MIN: " . min . "<br>";
    echo "MAX: " . max . "<br>";
    echo "idade: " . $idade . "<br>";
    
    if($idade >= min && $idade <= max){
        echo "Acesso liberado...";
    }else{
        echo "Acesso Bloqueado";
    }