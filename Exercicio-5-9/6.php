<?php

/*6-Escreva um programa que solicite ao usuário o valor de um produto e o percentual de imposto a ser aplicado. 
O programa deve calcular o valor do imposto e imprimir o valor total do produto com imposto.*/

$valorProduto = readline("Insira um valor para o produto X: ");
$percentualImposto = readline("Agora insira o percentual de imposto para o produto X: ");
$impostoCalculado = ($percentualImposto/100) + 1;


echo "O valor total do produto com imposto é " . ($impostoCalculado * $valorProduto);