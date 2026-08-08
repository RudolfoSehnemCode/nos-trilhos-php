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
  <?php include __DIR__ . '/../src/partials/sidebar.php'; ?>
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
</body>
</html>
