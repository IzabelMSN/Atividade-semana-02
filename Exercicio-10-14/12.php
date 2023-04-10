<?php

/*12-Escreva um programa que solicite ao usuário um número inteiro e calcule o fatorial desse número.
O programa deve imprimir o resultado.*/

$num = readline("Escolha um número: ");
$fatorial = 1;
$count = 1;

while($count <= $num){
    $fatorial *= $count;
    $count++;
}

echo "O fatorial de ".$num." é ".$fatorial;
