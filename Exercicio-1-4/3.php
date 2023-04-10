<?php

/*3-Escreva um programa que solicite ao usuário dois números inteiros e verifique se o 
primeiro número é maior que o segundo número. Se o primeiro número for maior que o segundo número, 
o programa deve imprimir uma mensagem informando que o primeiro número é maior. 
Caso contrário, o programa deve imprimir uma mensagem informando que o 
segundo número é maior ou que ambos os números são iguais.*/

$num1 = readline("Insira um número:");
$num2 = readline("Insira um segundo número:");

if($num1 > $num2){
    echo $num1 . " é maior que " . $num2;
}elseif($num1 == $num2){
    echo $num1 . " é igual a " . $num2;
}else{
    echo $num2 . " é maior que " . $num1;
}