<?php

if(is_int(5)){ //true
echo "É um numero inteiro <br>";
}

if(is_int("Não é um numero inteiro")){ //false
echo "É um numero inteiro";
} 

$A= 10;
if(is_int($A)){ //true
echo "É um numero inteiro variavel <br>";
}

/* checando numero inteiro
podemos validar se um dado é inteiro com a 
função is_int();
Caso um numero seja inteiro, será retornado true
(um outro tipo de dado);
*/

?>