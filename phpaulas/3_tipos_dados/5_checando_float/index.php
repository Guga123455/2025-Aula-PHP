<?php
$a = "teste";
$b = 10.8;

if(is_int($a)){
    echo "É float 1!<br>";
}

if(is_float($b)){
    echo "É float 2!<br>";
}

if(is_float(6565.63)){
    echo "É float 3! <br>";
}

if(is_float("Teste")){
    echo "É float 4!<br>";
}

/*
Checando se é float
Podemos utlizar a função is_float() para verificar
se um dado é um float;
A função recebe um valor como parâmetro;
Novamente receberemos true or false, dependendo
do dado enviado;
Precisaremos utilizar uma estrutura if para validar o valor
*/

?>
