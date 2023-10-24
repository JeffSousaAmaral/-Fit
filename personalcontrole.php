<?php
/*
INTEGRANTES DO GRUPO

Luiz Fernando de Sena Abreu
Jeferson Amaral
Thais Lopes
Thalita Lopes
*/


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os valores dos campos do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    $personal = $_POST['personal'];

    // Aqui você pode adicionar a lógica para salvar o agendamento em um banco de dados ou em outro local
    // Por simplicidade, apenas exibiremos uma mensagem de confirmação

    echo "Olá $nome, seu agendamento para o dia $data, às $horario com o personal $personal foi confirmado!";
}
?>
