<?php

/*5-Escreva um programa que solicite ao usuário sua idade. 
O programa deve imprimir uma mensagem informando se o usuário é maior ou menor de idade.*/

$idade = readline("Insira sua idade: ");

if($idade <= "17"){
    echo "Você é menor de idade";
}else{
    echo "Você é maior de idade";
}