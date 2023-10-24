


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Horário</title>
</head>
<!--//
INTEGRANTES DO GRUPO

Luiz Fernando de Sena Abreu
Jeferson Amaral
Thais Lopes
Thalita Lopes
-->
<body>
    <h1>Agendamento de Horário com Personal Trainer</h1>
    
    <form action="personalcontrole.php" method="post" name="login>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
        
        <label for="data">Data do Agendamento:</label>
        <input type="date" id="data" name="data" required>
        
        <label for="horario">Horário:</label>
        <input type="time" id="horario" name="horario" required>

        <label for="personal">Personal</label>
        <select id="personal" name="personal" required>
            <option value="thiago silva">Thiago Silva</option>
            <option value="vinicius sousa">Vinicius Sousa</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select>
        
        <input type="submit" value="Agendar">

        
    </form>
</body>
</html>













