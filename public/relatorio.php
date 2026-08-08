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
  <title>Relatório e análise</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include __DIR__ . '/../src/partials/sidebar.php'; ?>
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
</body>

</html>
