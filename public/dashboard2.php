<?php
include __DIR__ . '/../src/config/db.php';
session_start();
if(!isset($_SESSION['id'])){
  header("location: loginfaca.php");
  exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - NOS TRILHOS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

  
    <button id="botaoAbrirSidebar" class="abrir-btn1" onclick="abrirSidebar()">☰</button>

  
   <div id="sidebar1" class="sidebar1">
    <p class="menuside1"><strong>Menu</strong></p>
    <hr>
    <a href="javascript:void(0)" class="fechar-btn1" onclick="fecharSidebar()">✖</a>
    <a href="dashboard.php"> <img src="images/casa (1).png" alt=""> Início</a>
    <a href="gestao.php"> <img src="images/rotas.png" alt="">Gestão de Rotas</a>
    <a href="manutencao.php"><img src="images/manutencao (2).png" alt="">Manutenção</a>
    <a href="relatorio.php"> <img src="images/relatorio.png" alt="">Relatório e Análise</a>
    <a href="alertas.php"><img src="images/sinos.png" alt="">Notificações</a>
    <a href="dashboard2.php"><img src="images/painel.png" alt=""> Dashboard</a>
     <a href="logout.php"> <img src="images/sair (1).png" alt=""> Sair </a>
  
  </div>
  


  <header class="topo2">
    <div class="topo2">
      NOS TRILHOS
    </div>
  </header>

  <div class="manutencao">
    <h3><img src="images/painel (1).png" alt="">Dashboard</h3>
  </div>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

  
  <section id="estacao-container">
    <div class="estacao-box">
      <div class="estacao-conteudo">
        <img src="images/local.png" alt="" class="estacao-imagem">
        <h1 class="estacao-titulo">Estação NOS TRILHOS</h1>
      </div>
    </div>
  </section>

  
  <div class="status-trem-container">
    <div class="numero-trem"><span class="numero">01</span></div>
    <div class="informacoes-trem">
      <div class="titulo-status">
        <span class="nome-trem"><em><u>Trem 1</u></em></span>
        <span class="mensagem-status">Acabou de sair da estação</span>
      </div>
      <div class="info-detalhada">
        <div class="tempo-caminhada">
          <img src="images/andando.png" alt="Ícone andando" class="icone-andando">
          <span class="texto-caminhada">&lt; 1min</span>
        </div>
        <div class="horario-trem">21:55&gt;22:55</div>
      </div>
      <hr class="linha-divisoria">
    </div>
  </div>

  <div class="status-trem-container">
    <div class="numero-trem"><span class="numero">02</span></div>
    <div class="informacoes-trem">
      <div class="titulo-status">
        <span class="nome-trem"><em><u>Trem 2</u></em></span>
        <span class="mensagem-status">Voltando para estação</span>
      </div>
      <div class="info-detalhada">
        <div class="tempo-caminhada">
          <img src="images/andando.png" alt="Ícone andando" class="icone-andando">
          <span class="texto-caminhada">&lt; 15min</span>
        </div>
        <div class="horario-trem">21:05&gt;22:27</div>
      </div>
      <hr class="linha-divisoria">
    </div>
  </div>

  <div class="status-trem-container">
    <div class="numero-trem"><span class="numero">03</span></div>
    <div class="informacoes-trem">
      <div class="titulo-status">
        <span class="nome-trem"><em><u>Trem 3</u></em></span>
        <span class="mensagem-status">Está fora de rota</span>
      </div>
      <div class="info-detalhada">
        <div class="tempo-caminhada">
          <img src="images/andando.png" alt="Ícone andando" class="icone-andando">
          <span class="texto-caminhada">&lt; XX:XX</span>
        </div>
        <div class="horario-trem">XX:XX&gt;XX:XX</div>
      </div>
      <hr class="linha-divisoria">
    </div>
  </div>

  <div class="status-trem-container">
    <div class="numero-trem"><span class="numero">04</span></div>
    <div class="informacoes-trem">
      <div class="titulo-status">
        <span class="nome-trem"><em><u>Trem 4</u></em></span>
        <span class="mensagem-status">Está no ponto de embarque</span>
      </div>
      <div class="info-detalhada">
        <div class="tempo-caminhada">
          <img src="images/andando.png" alt="Ícone andando" class="icone-andando">
          <span class="texto-caminhada">&lt; 15min</span>
        </div>
        <div class="horario-trem">22:00&gt;23:45</div>
      </div>
      <hr class="linha-divisoria">
    </div>
  </div>

  
  <script>
    function abrirSidebar() {
      document.getElementById("sidebar1").style.width = "220px";
      document.getElementById("botaoAbrirSidebar").style.display = "none";
    }

    function fecharSidebar() {
      document.getElementById("sidebar1").style.width = "0";
      document.getElementById("botaoAbrirSidebar").style.display = "block";
    }

    function abrirModalSaida() {
      document.getElementById("modalSaida").style.display = "flex";
    }

    function fecharModalSaida() {
      document.getElementById("modalSaida").style.display = "none";
    }

    function confirmarSaida() {
      alert("Você saiu!");
      fecharModalSaida();
    }
  </script>

</body>

</html>
