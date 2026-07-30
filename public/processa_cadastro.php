<?php
include __DIR__ . '/../src/config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 
    $cpf = trim($_POST['cpf']);
    $data_nasc = $_POST['data_nasc'];
    $cargo = $_POST['cargo'];

    
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ? OR cpf = ?");
    $stmt->bind_param("ss", $email, $cpf);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Este email ou CPF já está cadastrado.";
    } else {
        
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, cpf, data_nasc, cargo) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nome, $email, $senha, $cpf, $data_nasc, $cargo);
        if ($stmt->execute()) {
            header("Location: finalizacao_cadastro.php");
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    }
}
?>
