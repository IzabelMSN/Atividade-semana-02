<?php

/*2-Um trabalhador recebe um salário base de R$ 2.500 por mês. Além disso, 
ele recebe uma comissão de 5% sobre o valor total de vendas realizadas no mês. 
Escreva um programa que calcule o salário final do trabalhador, 
com base no número de vendas realizadas e no valor total das vendas. 
Utilize o operador de multiplicação e atribuição para calcular a comissão e atualizar o salário base.*/

$salario = 2.500;
$porcentagem= 5;
$totalVendas = 25;

$totalVendas *= 500;

$total = ($porcentagem * $totalVendas)/100;

$salario += $salario + $total;

echo $salario;