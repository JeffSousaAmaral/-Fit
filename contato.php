<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<!--//
INTEGRANTES DO GRUPO

Luiz Fernando de Sena Abreu
Jeferson Amaral
Thais Lopes
Thalita Lopes
-->
<body>

     <div class="centertext">
        <p>Se você tiver alguma dúvida, sugestão ou precisar entrar em contato conosco por qualquer motivo, estamos à disposição para ajudar. Você pode nos contatar das seguintes maneiras:
       </p>
       <br>
    
      <h2><img src="imagens/telefone.png">Telefone:</h2>
      <h3>Ligue para o nosso número de atendimento ao cliente: (61) 99323-4653.</h3> 
      <br>

     <h2><img src="imagens/email.jpg">E-mail: </h2>
     <h3>Envie-nos um e-mail para [contatofit@gmail.com]. Responderemos o mais rápido possível.</h3>
     <br>

     <h2><img src="imagens/endereco.jpg">Endereço:</h2>
     <h3>Visite-nos em nosso endereço físico: [Rua 13 avenida 153]. </p></h3>
     <br>
     <br>

     <h2>Formulário de Contato:</h2>
     <h3>Utilize o formulário de contato abaixo para nos enviar uma mensagem diretamente. Certifique-se de preencher todos os campos obrigatórios</h3>
     <br>
     <br>
</div>
     <div class="formulario">
     <form action="">
      Email <input type="text" name="email" placeholder="nome@exemplo.com" size="40" id="email_id" required>
     <br>
     <br>
     <h4>Caso tenha sugestões, dúvidas ou críticas, por favor digite aqui:</h4><br><textarea name="critica" id="critica_id" cols="50" rows="5" placeholder="Digite suas reclamações aqui."></textarea>
    </form>
<br>
<button type="button" class="btn btn-primary btn-lg">Enviar</button>
</div>

<style>
  body{
    background-color:black;
    font-family: 'Noto Sans', 'sans-serif';
  }
  .centertext{
    text-align: center;
    height: 50%;
    text-indent: 10px;
    text-size-adjust: 10px;
    color: white;
          
    }
    .centertext p{;
    font-size: 30px;
    }
    .centertext h2{
      font-size:30px;
    }
    .centertext h2 img{
      width: 50px;
      height: 50px;
    }
    .centertext h3{
      font-size:20px;
    }
    .formulario{
      color: white;
      text-align: center;
    }
    .formulario input{
    border-radius: 10px;
    padding: 15px;
    background-color: #2c2c2c;
    color: white;
    font-size: 12pt;
    }
    .formulario h4{
      font-size:20px;
    }
    .formulario textarea{
      background-color: #2c2c2c;
    }
    .formulario button{
      border: none;
            border-radius: 10px;
            padding: 15px;
            background-color: #00ff88;
            color: #2b134b;
            letter-spacing: 3px;
            font-weight: 800;
    }
    </style>
</body>
</html>