<?php

/*14-Escreva um programa que solicite ao usuário um número inteiro
e imprima um padrão formado por asteriscos com base nesse número.
Por exemplo, se o usuário informar o número 4, o programa deve imprimir o seguinte padrão:*/

$numero = readline("Escreva um número: ");

for($ponto = 1; $ponto <= $numero; $ponto++){
    $pont = "*";
    echo $pont;
}