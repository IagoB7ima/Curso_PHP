<?php

function Leitura(string $arquivo){
        $fp = fopen($arquivo, "r");
        $texto = fread($fp, filesize($arquivo));
        return $texto;
    }
?>    