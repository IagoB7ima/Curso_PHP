<?php
    require_once 'index_02.php';
    
    try{
        AbrirConexao();
    } catch (Exception $ex) {
        echo"<b>Mensagem:</b>" . $ex->getMessage() . "<br>"; 
        echo"<b>Linha:</b>" . $ex->getLine() . "<br>"; 
        echo"<b>Arquivo:</b>" . $ex->getFile() . "<br>"; 
         
    }

