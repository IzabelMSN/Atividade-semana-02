<?php

/*7-Escreva um programa que solicite ao usuário uma senha. 
O programa deve permitir o acesso somente se a senha informada pelo usuário for igual a "1234". 
Caso contrário, o programa deve imprimir uma mensagem informando que a senha está incorreta e solicitar novamente a senha.*/

$senha = readline("Digite sua senha: ");

while ($senha != "1234") {
    echo "Senha incorreta. ";
    $senha = readline(" Digite a senha correta: ");
}


