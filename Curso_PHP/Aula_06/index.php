<?php

$idade = 19;
$senha = "1234";
/**if($idade >= 18){
    echo "Ok";
} else {
    echo "Invalido";
}
 * 
 */
 /**
  * if($senha == "123"){
     echo 'Acesso Autorizado';
 } else if($senha == "1234"){
    echo 'Acesso autorizado nível 1';
} else {
    echo 'Acesso negado';
}
*/

if($idade > 18 && $senha=="1234"){
    echo "Ok";
} else {
    echo "Invalido";
}

