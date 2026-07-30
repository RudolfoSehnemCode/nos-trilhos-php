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
  <title>Document</title>
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
  </div>

  
  <header class="topo2">
    <div class="topo2">
      NOS TRILHOS
    </div>
  </header>

  <div class="manutencao">
    <h3><img src="images/dashboard.png" alt="">Relatório e Análise</h3>
  </div>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

 
  <div class="container-taxas">
    <div class="taxa-pontualidade">
      <p>Taxa de pontualidade</p>
      <img src="images/pontualidadetrens.png" alt="">
    </div>

    <div class="taxa-pontualidade">
      <p>Taxa de quilometragem</p>
      <img src="images/desempenhotrens.png" alt="">
    </div>

    <div class="taxa-pontualidade">
      <p>Horários de pico</p>
      <img src="images/pizza.png" alt="">
    </div>

    <div class="taxa-pontualidade">
      <p>Satisfação de pico</p>
      <img src="images/barra.png" alt="">
    </div>

    <div class="taxa-pontualidade">
      <p>Passagens vendidas hoje</p>
      <img src="images/vendashj.png" alt="">
    </div>

    <div class="taxa-pontualidade">
      <p>Aumento valor da passagem</p>
      <img src="images/porcent.png" alt="">
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
