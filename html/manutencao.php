<?php
include 'db.php';
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
  <title>Manutenção - NOS TRILHOS</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
  
    <button id="botaoAbrirSidebar" class="abrir-btn1" onclick="abrirSidebar()">☰</button>

  
   <div id="sidebar1" class="sidebar1">
    <p class="menuside1"><strong>Menu</strong></p>
    <hr>
    <a href="javascript:void(0)" class="fechar-btn1" onclick="fecharSidebar()">✖</a>
    <a href="../html/dashboard.php"> <img src="../images/casa (1).png" alt=""> Início</a>
    <a href="../html/gestao.php"> <img src="../images/rotas.png" alt="">Gestão de Rotas</a>
    <a href="../html/manutencao.php"><img src="../images/manutencao (2).png" alt="">Manutenção</a>
    <a href="../html/relatorio.php"> <img src="../images/relatorio.png" alt="">Relatório e Análise</a>
    <a href="../html/alertas.php"><img src="../images/sinos.png" alt="">Notificações</a>
    <a href="../html/dashboard2.php"><img src="../images/painel.png" alt=""> Dashboard</a>

    

  <a href="logout.php"> <img src="../images/sair (1).png" alt=""> Sair </a>
  
  </div>
  </div>

  
  <header class="topo2">

    <div class="topo2">
      NOS TRILHOS
    </div>
  </header>

  
  <div class="manutencao">
    <h3><img src="../images/manutencao1.png" alt="">Manutenção</h3>
  </div>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

  
  <div class="manutencao-container">
    <div class="titulo">Marcar manutenção</div>

    <table>
      <tr>
        <td>
          <select>
            <option>Data</option>
            <option>10/06/2025</option>
            <option>11/06/2025</option>
            <option>12/06/2025</option>
          </select>
        </td>
        <td>
          <select>
            <option>Motivo</option>
            <option>Troca de peça</option>
            <option>Inspeção</option>
            <option>Emergência</option>
          </select>
        </td>
        <td>
          <select>
            <option>Linha</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <select>
            <option>Data</option>
            <option>13/06/2025</option>
            <option>14/06/2025</option>
            <option>15/06/2025</option>
          </select>
        </td>
        <td>
          <select>
            <option>Motivo</option>
            <option>Troca de óleo</option>
            <option>Verificação</option>
            <option>Pane elétrica</option>
          </select>
        </td>
        <td>
          <select>
            <option>Linha</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select>
        </td>
      </tr>
    </table>

   
    <div class="mensagem" id="mensagem" style="display: none;">
      Manutenção marcada com sucesso!
    </div>
  </div>

  <button class="botao-confirmar" onclick="mostrarMensagem()">Confirmar</button>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

  
  <div class="realizadas-container">
    <div class="titulo">Manutenções realizadas</div>

    <table>
      <tr>
        <td>23/07</td>
        <td>Deslizamento de rochas</td>
        <td>Trem 1</td>
      </tr>
      <tr>
        <td>09/05</td>
        <td>Manutenção regular</td>
        <td>Todas</td>
      </tr>
    </table>
  </div>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

  
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
