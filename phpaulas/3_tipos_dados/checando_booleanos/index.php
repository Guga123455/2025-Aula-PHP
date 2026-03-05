<?php

$a = true;
if(is_bool($a));{
    echo "É um booleano 1 <br>";
}

if (is_bool(0)){
    echo "É um booleano 2 <br>";

}

if (is_bool(false)){
    echo "É um booleano 3 <br>";

}

if(0.0 == false){
    echo "0 considerado falso! <br>";
}

/*

Checando se é booleano
Podemos utilizar a funlçai is_boolean() para verificar se um dado
é boolean;
A função recebe um valor como parâmetro;
Novamente receberemos true or false, dependendo do dado enviado;
Precisaremos utlizar uma estrutura if para validar o valor;

 */
  
?>

