<?php

/*4-Escreva um programa que solicite ao usuário uma senha de acesso. 
O programa deve permitir o acesso somente se a senha informada pelo usuário for igual a "1234" ou "abcd". 
Caso contrário, o programa deve imprimir uma mensagem informando que a senha está incorreta e solicitar novamente a senha. 
Utilize os operadores lógicos (ou e igualdade) para combinar as condições de senha válida. */

$senha = readline("Ponha sua senha de acesso: ");

if($senha == "1234" || $senha == "abcd"){
    echo "Senha correta! Acesso aceito";
}else{
    echo "Senha incorreta! Acesso negado";
}