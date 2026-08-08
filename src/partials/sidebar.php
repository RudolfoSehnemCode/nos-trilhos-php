<button id="botaoAbrirSidebar" class="abrir-btn1 <?= $corBotao ?? '' ?> <?= $posicaoBotao ?? '' ?>" onclick="abrirSidebar()">☰</button>

<div id="sidebar1" class="sidebar1 <?= $corSidebar ?? '' ?>">
  <p class="menuside1"><strong>Menu</strong></p>
  <hr>
  <a href="javascript:void(0)" class="fechar-btn1" onclick="fecharSidebar()">✖</a>
  <a href="dashboard.php"> <img src="images/casa (1).png" alt=""> Início</a>
  <a href="gestao.php"> <img src="images/rotas.png" alt="">Gestão de Rotas</a>
  <a href="manutencao.php"><img src="images/manutencao (2).png" alt="">Manutenção</a>
  <a href="relatorio.php"> <img src="images/relatorio.png" alt="">Relatório e Análise</a>
  <a href="alertas.php"><img src="images/sinos.png" alt="">Notificações</a>
  <a href="dashboard2.php"><img src="images/painel.png" alt=""> Dashboard</a>
  <a href="perfil.php"><img src="images/user-regular-fullsvg" alt="">Meu Perfil</a>
  <a href="logout.php"> <img src="images/sair (1).png" alt=""> Sair </a>
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
</script>