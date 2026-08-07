<?php
include __DIR__ . '/../src/config/db.php';
session_start();
if(!isset($_SESSION['id'])){
  header("location: loginfaca.php");
  exit();
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rotas - NOS TRILHOS</title>
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
    <div class="topo2">NOS TRILHOS</div>
  </header>

  
  <div class="rotas">
    <h3><img src="images/rota.png" alt="">Rotas</h3>
  </div>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

  <div class="central">
    <img src="images/gestaodetrilhos.png" alt="" style="height: 370px; width: 100%;">
    <hr style="height: 2px; background-color: black; border: none; width: 100%;">
  </div>

  <div class="onlyline">
    <hr style="height: 2px; background-color: black; border: none; width: 100%;">
  </div>

  <div class="container-gestao">
    <p><strong><img src="images/trem.png" alt=""> Trem em movimento</strong></p>
    <p><strong><img src="images/bolaverde-removebg-preview.png" alt=""> Linha livre para trânsito</strong></p>
    <p><strong><img src="images/alerta.png" alt=""> Linha com suspeita de problema</strong></p>
    <p><strong><img src="images/alerta (1).png" alt=""> Linha com problema</strong></p>
    <p><strong><img src="images/troca.png" alt=""> Alteração de rotas</strong></p>
  </div>

  <div class="onlyline">
    <hr style="height: 2px; background-color: black; border: none; width: 100%;">
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
