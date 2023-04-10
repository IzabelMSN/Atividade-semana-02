<?php

/*8- Escreva um programa que solicite ao usuário um nome de usuário e uma senha. 
O programa deve permitir o acesso somente se o nome de usuário for "admin" e a senha for "1234". 
Caso contrário, o programa deve imprimir uma mensagem informando que o 
login está incorreto e solicitar novamente o nome de usuário e a senha.*/

$usuario = readline("Digite o nome do seu usuário: ");
$senha = readline("Digite sua senha: ");

while ($usuario != "admin" && $senha != "1234") {
    echo "Login incorreto. ";
    $usuario = readline(" Digite usuário correto: ");
    $senha = readline("Digite a senha correta: ");
}