<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--boodstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!--Css-->
<link rel="stylesheet" href="index.css">

    <title>Meus exercicios</title>
    <style>
        .exercicioestilo{
            color: white;

        }

    </style>
</head>
<!--//
INTEGRANTES DO GRUPO

Luiz Fernando de Sena Abreu
Jeferson Amaral
Thais Lopes
Thalita Lopes
-->
<body class="exercicioestilo" style="background-color: black;">
    <h1>Formulário de Exercícios na Academia</h1>
    
    <form id="exerciseForm">
        <fieldset>
            <legend>Adicionar Exercício</legend>
            <label for="nomeExercicio">Nome do Exercício:</label>
            <input type="text" id="nomeExercicio" name="nomeExercicio" required>
            
            <label for="series">Séries:</label>
            <input type="number" id="series" name="series" required>
            
            <label for="repeticoes">Repetições:</label>
            <input type="number" id="repeticoes" name="repeticoes" required>
            
            <label for="carga">Carga (kg):</label>
            <input type="number" id="carga" name="carga" required>
            
            <button type="button" id="adicionarExercicio">Adicionar Exercício</button>
        </fieldset>
    </form>
    
    <h2>Exercícios Adicionados:</h2>
    <ul id="exerciciosAdicionados"></ul>
<br> 
<br>
<img src="imagens/prancha-exercicio-poster.jpg" height="650" width="1500">
</div>
<br>
<br>
<center><h4>Dolorido hoje, forte amanhã!</h4></center>

<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="imagens/abdominal.webp" class="card-img-top" width="300" height="350">
        <div class="card-body">
          <h5 class="card-title">Abdominal</h5>
          <p class="card-text">O abdominal solo é usado quando o objetivo é afinar a cintura, pois ajuda a definir os músculos da parte de cima da barriga. <b>Faça 4 séries de 30 repetições ou o máximo que conseguir.
          </b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagens/prancha frontal.gif" class="card-img-top" width="300" height="325">
        <div class="card-body">
          <h5 class="card-title">Prancha</h5>
          <p class="card-text">O tronco, o quadril e as pernas não tocam o chão enquanto os antebraços estão apoiados no solo. O truque para ser eficaz é manter o alinhamento da coluna e não prender a respiração. <b> Faça três séries de 30 segundos.</b></p>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="imagens/flexão de braço.webp" class="card-img-top" width="300" height="300">
        <div class="card-body">
          <h5 class="card-title">Flexão de Braço</h5>
          <p class="card-text">É um exercício de simples execução. Com as mãos no chão, alinhe os braços ao peitoral. No movimento de descida os cotovelos devem flexionar até 90 graus.</p>
           <p><b> Faça três sessões de 08 a 12 repetições. Para iniciantes, pode iniciar com os joelhos apoiados no solo.</b></p> 
        </div>
      </div>
    </div>
    <br>
    <br>

  <div class="col">
    <div class="card h-100">
      <img src="imagens/agachamento afundo.webp" class="card-img-top" width="300" height="300">
      <div class="card-body">
        <h5 class="card-title">Agachamento Afundo</h5>
        <p class="card-text">Fique em pé, com os pés afastados na largura dos ombros (essa distância é boa para manter o equilíbrio). Segure um halter fixo em cada uma das mãos e deixe os braços estendidos ao lado do corpo. Em seguida, leve um pé mais para a frente e flexione o joelho da perna em 90º, até que a coxa correspondente esteja paralela ao chão. Volte à posição original.</p>
        <p><b>2 séries de 15 repetições, com o intervalo de 30 segundos entre cada série.</b></p> 
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="imagens/agachamento.webp" class="card-img-top" width="300" height="350">
      <div class="card-body">
        <h5 class="card-title">Agachamento</h5>
        <p class="card-text">Feito sem pesos, é um dos melhores exercícios para fazer em casa para os iniciantes, e os mais experientes podem adicionar uma carga extra, seja segurando halteres, uma anilha ou até mesmo uma barra</p>
        <p><b>Faça 2 séries de 15 repetições, com o intervalo de 30 segundos entre cada série.</b></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imagens/triceps-no-banco.webp" class="card-img-top" width="300" height="350">
      <div class="card-body">
        <h5 class="card-title">Tríceps no Banco</h5>
        <p class="card-text">Sente-se na beirada de um banco, mantendo as palmas apoiadas na extremidade do banco e os joelhos flexionados a 90º. É preciso segurar com firmeza, manter o tronco encaixado, contrair os glúteos e dar uns passinhos para a frente, deixando os braços totalmente estendidos e sustentando o peso do corpo
        <b>Faça 2 séries de 15 repetições, com o intervalo de 30 segundos entre cada série.</b></p>
      </div>
    </div>
<br>
<br>
</div>
<button type="button" class="btn btn-primary btn-lg">Salvar</button>

<div class="rodape">
  <center><h1>+Fit</h1></center>
  <br>
  <br>
  <p>*Os resultados podem variar de pessoa para pessoa e não são garantidos. Exercício e dieta adequada são necessários para a perda de peso e alcançar a definição muscular. Os depoimentos apresentados podem ter usado mais de um produto +FIT ou estendido o programa para alcançar seus resultados máximos.</p>
  <br>
  <p> Consulte o seu médico e siga todas as instruções de segurança antes de iniciar qualquer programa de exercício, plano nutricional ou utilizar qualquer produto de suplemento ou substituição de refeições, especialmente se você estiver grávida, amamentando, tem qualquer cuidado médico ou está tomando qualquer tipo de medicamento.</p>
  <br>
  <button type="button" class="btn btn-outline-success">VOLTAR <a href="index.php"></a><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></button>
  </svg>
</div>

<script src="script.js-"></script>

    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const exerciseForm = document.getElementById("exerciseForm");
            const exerciciosAdicionados = document.getElementById("exerciciosAdicionados");
            
            document.getElementById("adicionarExercicio").addEventListener("click", function() {
                const nomeExercicio = document.getElementById("nomeExercicio").value;
                const series = document.getElementById("series").value;
                const repeticoes = document.getElementById("repeticoes").value;
                const carga = document.getElementById("carga").value;
                
                const exercicioItem = document.createElement("li");
                exercicioItem.textContent = `Exercício: ${nomeExercicio}, Séries: ${series}, Repetições: ${repeticoes}, Carga: ${carga} kg`;
                
                exerciciosAdicionados.appendChild(exercicioItem);
                
                // Limpa os campos do formulário
                document.getElementById("nomeExercicio").value = "";
                document.getElementById("series").value = "";
                document.getElementById("repeticoes").value = "";
                document.getElementById("carga").value = "";
            });
        });
    </script>
</body>
</html>