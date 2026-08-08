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
  <title>Início - NOS TRILHOS</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  $corSidebar = 'sidebar1--inicio';
  $corBotao = 'abrir-btn1--preto';
  $posicaoBotao = 'abrir-btn1--posicao-inicio';
  include __DIR__ . '/../src/partials/sidebar.php';
  ?>
  <h2 class="topo1">NOS TRILHOS</h2>

  <div class="search-container">
    <input type="text" placeholder="O que você procura?" style="text-align: center;">
    <img src="images/lupa.png" alt="" style="height: 20px; position: relative; right: 31px;">
  </div>

  <div class="linha-com-texto">
    <span>Serviços</span>
  </div>

  <h3 class="section-subtitle">Mais acessados</h3>

  <div class="menu-list">

    <a href="gestao.php" class="menu-item">
      <span class="number">1</span> <span>Gestão de Rotas</span>
    </a>

    <a href="manutencao.php" class="menu-item">
      <span class="number">2</span> <span>Manutenção</span>
    </a>

    <a href="relatorio.php" class="menu-item">
      <span class="number">3</span> <span>Relatórios e Análises</span>
    </a>

    <a href="alertas.php" class="menu-item">
      <span class="number">4</span> <span>Alertas e Notificações</span>
    </a>

    <a href="dashboard2.php" class="menu-item">
      <span class="number">5</span> <span>Dashboard</span>
    </a>

    <?php
    if ($_SESSION['user_cargo'] === 'Admin'): ?>
      <a href="adicionar-funcionario.php" class="menu-item">
        <span class="number">6</span> <span>Administração de Usuários</span>
      </a>
    <?php endif; ?>

  </div>

  <footer>
    <p class="rodape">NOS TRILHOS</p>
  </footer>
</body>

</html>