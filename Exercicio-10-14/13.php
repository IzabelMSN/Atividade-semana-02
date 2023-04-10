<?php

/*13-Escreva um programa que solicite ao usuário um número inteiro e verifique 
se esse número está presente em um array de números previamente definido.
O programa deve imprimir uma mensagem informando se o número foi encontrado ou não.*/

$numeros = array("2", "5", "8", "12", "18", "23", "34", "47", "51", "55", "65", "67", "89");

$numSolicitado = readline("Escreva um número: ");

if (in_array($numSolicitado,$numeros)) {
    echo "O número ".$numSolicitado." foi encontrado";
}else{
    echo "O número ".$numSolicitado." não foi encontrado";
}