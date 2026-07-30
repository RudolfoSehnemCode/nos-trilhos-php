<?php
include __DIR__ . '/../src/config/db.php';

session_start();

if(!isset($_SESSION['id'])){
  header("location: loginfaca.php");
  exit();
} else if($_SESSION['user_cargo'] != 'Admin'){
  header("location: dashboard.php");
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
    <style>
      
      .ntUserAdminAddPage {
        padding: 20px 16px;
        max-width: 920px;
        width: 100%;
        margin: 0 auto 24px auto;
        overflow-x: hidden;
      }

      .ntUserAdminAddPage, .ntUserAdminAddPage * { box-sizing: border-box; }

      .ntUserAdminAddPage__headerTitle {
        text-align: left;
        margin: 0;
        font-size: 22px;
      }


      .ntUserAdminAddPage__subtitle {
        margin-top: 12px;
        font-weight: 950;
        color: #3b3b3b;
        text-align: left;
      }

      .ntUserAdminAddPage__card {
        background: #fff;
        border: 1px solid #e4e4e4;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        overflow: hidden;
        margin-top: 12px;
      }

      .ntUserAdminAddPage__table {
        display: flex;
        flex-direction: column;
        width: 100%;
      }

      .ntUserAdminAddPage__row {
        display: grid;
        grid-template-columns: 1fr;
        border-top: 1px solid #eee;
        width: 100%;
      }

      .ntUserAdminAddPage__row:first-child { border-top: none; }

      .ntUserAdminAddPage__cell {
        padding: 14px 16px;
        border-top: 1px solid #f7f7f7;
        min-width: 0;
      }

      .ntUserAdminAddPage__cell:first-child { border-top: none; }

      .ntUserAdminAddPage__label {
        display: block;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 6px;
        text-align: left;
      }

      .ntUserAdminAddPage__input,
      .ntUserAdminAddPage__select {
        width: 100%;
        height: 44px;
        padding: 10px 12px;
        border: 1px solid #cfcfcf;
        border-radius: 8px;
        background: #fff;
        font-size: 16px;
      }

      .ntUserAdminAddPage__select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        padding-right: 36px;
        background-image: linear-gradient(45deg, transparent 50%, #666 50%), linear-gradient(135deg, #666 50%, transparent 50%);
        background-position: right 12px center, right 18px center;
        background-size: 6px 6px, 6px 6px;
        background-repeat: no-repeat;
      }

      .ntUserAdminAddPage__actions {
        display: flex;
        justify-content: flex-end;
        padding: 14px 16px;
        gap: 12px;
        flex-wrap: wrap;
      }

      .ntUserAdminAddPage__submitBtn {
        background: #003366;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 12px 20px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
      }

      .ntUserAdminAddPage__submitBtn:hover { background: #0055aa; }

     
      @media (min-width: 480px) {
        .ntUserAdminAddPage__submitBtn { width: auto; }
      }

      @media (min-width: 768px) {
        .ntUserAdminAddPage__row { grid-template-columns: 1fr 1fr; column-gap: 16px; }
      }

      
      .ntUserAdminAddPage + footer .rodape { position: static; }
    </style>
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
  <div class="ntUserAdminAddPage">
   

     
    <p class="ntUserAdminAddPage__subtitle">Cadastro de Usuário</p>

    <div class="ntUserAdminAddPage__card">
      <form action="processa_cadastro.php" method="post">
        <div class="ntUserAdminAddPage__table">
          <div class="ntUserAdminAddPage__row">
            <div class="ntUserAdminAddPage__cell">
              <label class="ntUserAdminAddPage__label"  for="nome">Nome</label>
              <input class="ntUserAdminAddPage__input" id="nome" type="text" name="nome" required>
            </div>
            <div class="ntUserAdminAddPage__cell">
              <label class="ntUserAdminAddPage__label" for="email">Email</label>
              <input class="ntUserAdminAddPage__input" id="email" type="email" name="email" required>
            </div>
          </div>

          <div class="ntUserAdminAddPage__row">
            <div class="ntUserAdminAddPage__cell">
              <label class="ntUserAdminAddPage__label" for="senha">Senha</label>
              <input class="ntUserAdminAddPage__input" id="senha" type="password" name="senha" required>
            </div>
            <div class="ntUserAdminAddPage__cell">
              <label class="ntUserAdminAddPage__label" for="cpf">CPF</label>
              <input class="ntUserAdminAddPage__input" id="cpf" type="text" name="cpf" required placeholder="000.000.000-00">
            </div>
          </div>

          <div class="ntUserAdminAddPage__row">
            <div class="ntUserAdminAddPage__cell">
              <label class="ntUserAdminAddPage__label" for="data_nasc">Data de Nascimento</label>
              <input class="ntUserAdminAddPage__input" id="data_nasc" type="date" name="data_nasc" required>
            </div>
            <div class="ntUserAdminAddPage__cell">
              <label class="ntUserAdminAddPage__label" for="cargo">Cargo</label>
              <select class="ntUserAdminAddPage__select" id="cargo" name="cargo" required>
                <option value="Funcionario">Funcionario</option>
                <option value="Admin">Admin</option>
              </select>
            </div>
          </div>
        </div>

        <div class="ntUserAdminAddPage__actions">
          <button class="ntUserAdminAddPage__submitBtn" type="submit">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
  

  <footer>
    <p class="rodape">NOS TRILHOS</p>
  </footer>


<script>
    function abrirSidebar() {
      document.getElementById("sidebar1").style.width = "220px";
      document.getElementById("botaoAbrirSidebar").style.display = "none";
    }

    function fecharSidebar() {
      document.getElementById("sidebar1").style.width = "0";
      document.getElementById("botaoAbrirSidebar").style.display = "block";
    }

    function mostrarMensagem() {
      document.getElementById("mensagem").style.display = "block";
    }

  
  </script>

  
</body>

</html>
