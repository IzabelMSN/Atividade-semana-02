<?php

/*9-Escreva um programa que solicite ao usuário um número inteiro e verifique se o número é par ou ímpar. 
O programa deve imprimir uma mensagem informando se o número é par ou ímpar.*/

$usuarioNum = readline("Digite um número: ");

if($usuarioNum % 2 == 0){
    echo "O número " . $usuarioNum . " é par.";
}else{
    echo "O número " . $usuarioNum . " é ímpar.";
}