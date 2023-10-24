<?php
/*
INTEGRANTES DO GRUPO

Luiz Fernando de Sena Abreu
Jeferson Amaral
Thais Lopes
Thalita Lopes
*/


/* PHP USADO PARA VALIDAR SENHAS, CASO AS SENHAS DIGITADAS NÃO ESTEJEM AQUI, ELE DIRECIONA PRA OUTRA PÁGINA */

$senha = $_POST['senha'];

switch($senha){
    case '1234';
    include ('paginaprincipal.html');
    break;

    case '123';
    include ('paginaprincipal.html');
    break;

    case '1234567';
    include ('paginaprincipal.html');
    break;

    default;
    include ('senhainvalida.html');
    break;
    
}
?>


