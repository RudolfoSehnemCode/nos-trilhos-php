<?php
include __DIR__ . '/../src/config/db.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("location: loginfaca.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notificações e Alertas - NOS TRILHOS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include __DIR__ . '/../src/partials/sidebar.php'; ?>

  <header class="topo2">
    <div class="topo2">NOS TRILHOS</div>
  </header>

  <main class="container-nt py-4">

    <h3 class="d-flex align-items-center gap-2 mb-3">
      <i class="bi bi-bell-fill"></i>Notificações e Alertas
    </h3>

    <hr>

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5 class="mb-0">Segunda-feira</h5>
      <div class="d-flex align-items-center gap-3">
        <span class="badge bg-secondary rounded-pill" role="button" onclick="alternarNotificacoes(this)">Desativar</span>
        <i class="bi bi-trash3 text-danger" role="button" onclick="limparNotificacoes()"></i>
      </div>
    </div>

    <div class="card mb-2 notificacao-card border-danger">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="fw-bold text-danger"><i class="bi bi-exclamation-triangle-fill me-1"></i>Alerta</span>
          <small class="text-muted">Seg 5:10 PM</small>
        </div>
        <p class="mb-0">ATENÇÃO: TRILHO DE TREM INTERROMPIDO! Desvio necessário, siga as orientações de segurança.</p>
      </div>
    </div>

    <div class="card mb-2 notificacao-card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <span class="fw-bold"><i class="bi bi-bell me-1"></i>Notificação</span>
          <small class="text-muted">Seg 2:46 PM</small>
        </div>
        <p class="mb-0">Próximo Trens: Trem 1 às 15:30, Trem 2 às 16:45, Trem 3 às 17:50. Embarque com segurança!</p>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let notificacoesAtivas = true;

    function alternarNotificacoes(elemento) {
      notificacoesAtivas = !notificacoesAtivas;
      document.querySelectorAll(".notificacao-card").forEach(card => {
        card.style.display = notificacoesAtivas ? "block" : "none";
      });
      elemento.textContent = notificacoesAtivas ? "Desativar" : "Ativar";
    }

    function limparNotificacoes() {
      document.querySelectorAll(".notificacao-card").forEach(card => card.style.display = "none");
    }
  </script>

</body>
</html>