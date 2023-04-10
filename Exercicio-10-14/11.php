<?php
/*11-Escreva um programa que solicite ao usuário uma quantidade indeterminada de notas e ca>
O programa deve permitir que o usuário informe que não deseja informar mais notas e encerra>
*/
$totalDeNotas = 0;
$numNotas = 0;
$escolha =  "S";
while ($escolha == "S"){
    $notas = floatval(readline("Digite  uma nota: "));
    $escolha = readline("Quer digitar mais notas? S ou N ");      
    $totalDeNotas += $notas;
    $numNotas++;
    
}
$media = $totalDeNotas/$numNotas;
echo $totalDeNotas/$numNotas;   