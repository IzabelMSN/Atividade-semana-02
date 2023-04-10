<?php

/*10- Escreva um programa que solicite ao usuário um número inteiro e imprima a tabuada desse número de 1 a 10.*/

$numTabuada = readline("Digite o número que quer ver a tabuada: ");

for($count = 1; $count <=10; $count++){
    echo $numTabuada." x ".$count." = ".($numTabuada*$count)."\n"; 
}