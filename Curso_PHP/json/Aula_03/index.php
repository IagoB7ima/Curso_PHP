<?php
    $cep = "25576-230";
    $cep = str_replace(".","",$cep);
    $str = file_get_contents("http://correiosapi.apphb.com/cep/".$cep);
    
    echo $str;
