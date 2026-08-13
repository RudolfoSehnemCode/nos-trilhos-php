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
  <title>Notificações e Alertas - NOS TRILHOS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include __DIR__ . '/../src/partials/sidebar.php'; ?>
  <header class="topo2">
    <div class="topo2">NOS TRILHOS</div>
  </header>

  <div class="manutencao">
    <h3><img src="images/sino-de-notificacao.png" alt="">Notificações e Alertas</h3>
  </div>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

  
  <div class="painel-notificacoes-ferroviarias">
    <div class="line-bar">
      <h1 class="painel-notificacoes__cabecalho">Segunda-feira</h1>
      <div class="acoes-notificacao">
        <h3 class="lidas" onclick="alternarNotificacoes(this)">Desativar</h3>
        <img src="images/excluir.png" alt="Excluir" class="icone-excluir" onclick="limparNotificacoes()">
      </div>
    </div>

    <div class="notificacao-card">
      <div class="notificacao-card__cabecalho">
        <span class="notificacao-card__titulo"> <img src="images/atencao (1).png" alt="">Alerta</span>
        <span class="notificacao-card__horario">Seg 5:10 PM</span>
      </div>
      <div class="notificacao-card__conteudo">
        ATENÇÃO: TRILHO DE TREM INTERROMPIDO! Desvio necessário, siga as orientações de segurança.
      </div>
    </div>

    <div class="notificacao-card">
      <div class="notificacao-card__cabecalho">
        <span class="notificacao-card__titulo"> <img src="images/notificacao.png" alt="">Notificação</span>
        <span class="notificacao-card__horario">Seg 2:46 PM</span>
      </div>
      <div class="notificacao-card__conteudo">
        Próximo Trens: Trem 1 às 15:30, Trem 2 às 16:45, Trem 3 às 17:50. Embarque com segurança!
      </div>
    </div>
  </div>

  
  <script>

    function limparNotificacoes() {
      const cards = document.querySelectorAll(".notificacao-card");
      cards.forEach(card => card.style.display = "none");
    }

    let notificacoesAtivas = true;

    function alternarNotificacoes(elemento) {
      const cards = document.querySelectorAll(".notificacao-card");

      if (notificacoesAtivas) {
        cards.forEach(card => card.style.display = "none");
        elemento.textContent = "Ativar";
      } else {
        cards.forEach(card => card.style.display = "block");
        elemento.textContent = "Desativar";
      }

      notificacoesAtivas = !notificacoesAtivas;
    }

   
  </script>

</body>
</html>
