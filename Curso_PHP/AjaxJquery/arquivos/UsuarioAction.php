<?php

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
$arquivo = "usuario.txt";

switch($req){
    case 1:
        $cep = filter_input(INPUT_POST, "txtCep", FILTER_SANITIZE_STRING);
        $logradouro = filter_input(INPUT_POST, "txtLogradouro", FILTER_SANITIZE_STRING);
        $rua = filter_input(INPUT_POST, "txtRua", FILTER_SANITIZE_STRING);
        $bairro = filter_input(INPUT_POST, "txtBairro", FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, "txtCidade", FILTER_SANITIZE_STRING);
        $estado = filter_input(INPUT_POST, "txtEstado", FILTER_SANITIZE_STRING);

        $str = "CEP: {$cep}|Logradouro: {$logradouro}|Rua:{$rua}|Bairro:{$bairro}|Cidade:{$cidade}|Estado:{$estado}";

        $fp = fopen($arquivo, "w");
        if(fwrite($fp, "{$str}")){
            echo "1";
        }else{
            echo "0";
        }
        fclose($fp);
    break;

    case 2:
        $fp = fopen($arquivo, "r");
        $texto = fread($fp, filesize($arquivo));
        fclose($fp);
        echo $texto;
    break;

    default:
        echo "nada";
    break;
}