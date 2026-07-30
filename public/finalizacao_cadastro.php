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
    <title>Cadastro Efetuado </title>
   
</head>
<body>

    <div class="topo2">
      NOS TRILHOS   
      </div>

      <div class="mensagem_sucesso">
        <h2>Cadastro realizado com sucesso!</h2>
        <p>Seu cadastro foi efetuado com sucesso. Agora o usuario pode fazer login na plataforma.</p>
        <a href="dashboard.php" class="botao_login">Ir ao Dashboard</a>
      </div>
    
    <style>
        .botao_login{
  background-color: #003366;
  color: white;
  padding: 12px 18px;
  font-size: 18px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  width: 20%;
  text-decoration: transparent;

  
   font-family: Arial, sans-serif;
    background-color: #f4f4f8;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Topo fixo */
.topo2 {
    width: 100%;
    background-color: #003366;
    color: white;
    text-align: center;
    padding: 20px 0;
    font-size: 28px;
    font-weight: bold;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
}

/* Container da mensagem */
.mensagem_sucesso {
    background-color: #fff;
    padding: 40px 30px;
    margin-top: 120px; /* espaço abaixo do topo fixo */
    border-radius: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-align: center;
    max-width: 600px;
    width: 90%;
}

/* Título da mensagem */
.mensagem_sucesso h2 {
    color: #003366;
    font-size: 28px;
    margin-bottom: 20px;
}

/* Texto da mensagem */
.mensagem_sucesso p {
    font-size: 16px;
    color: #333;
    margin-bottom: 30px;
}

/* Botão de ação */
.botao_login {
    display: inline-block;
    background-color: #003366;
    color: white;
    padding: 14px 24px;
    font-size: 18px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s;
}

.botao_login:hover {
    background-color: #0055aa;
}

/* Responsivo */
@media (max-width: 480px) {
    .mensagem_sucesso {
        padding: 30px 20px;
    }

    .botao_login {
        width: 100%;
        text-align: center;
        padding: 12px 0;
        font-size: 16px;
    }
}
  
 

    </style>
      
</body>
</html>