<?php
    /*
    {
        "titulo": "Titanic",
        "sinopse": "Um navio colide com um ice berg e afunda",
        "ano": "2017",
        "horarios": ["16:00","19:00","20:00",],
    }
    */

    $arryFilme = array(
        "titulo"=>"Titanic",
        "sinopse"=>"Um navio colide com um ice berg e afunda",
        "ano"=>"2017",
        "horarios"=>array(
            "16:00",
            "19:00",
            "20:00"
        )
    );

    //var_dump($arryFilme);

    $jsonStr = json_encode($arryFilme);

    echo $jsonStr;