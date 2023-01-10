<?php
    //sha1
    $s = sha1("Olá, mundo");
    echo $s;
    
    echo "<br>";
    
    //md5
    $m = md5("PHP intermediário");
    echo $m;
    
    echo "<br>";
    
    //base64_encode
    $b = base64_encode("criptografia");
    echo $b;
    echo "<br>";
    echo base64_decode($b);