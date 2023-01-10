<?php
    
    function Gravar(string $texto, string $arquivo){
        $fp = fopen($arquivo, "a+");
        fwrite($fp, "{$texto} <br>\r\n");
        fclose($fp);
    }

    Gravar(date("d/m/Y H:i:s"), "file.txt");
    
    function Leitura(string $arquivo){
        $fp = fopen($arquivo, "r");
        $texto = fread($fp, filesize($arquivo));
        return $texto;
    }
    
    echo Leitura("File.txt");