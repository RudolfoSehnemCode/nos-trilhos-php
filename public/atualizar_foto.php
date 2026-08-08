<?php
include __DIR__ . '/../src/config/db.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {

    $extensoesPermitidas = ['jpg', 'jpeg', 'png'];
    $tamanhoMaximo = 2 * 1024 * 1024; // 2MB

    $extensao = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
    $tamanho = $_FILES['foto']['size'];

    if (!in_array($extensao, $extensoesPermitidas)) {
        header("Location: perfil.php?erro=formato_invalido");
        exit();
    }

    if ($tamanho > $tamanhoMaximo) {
        header("Location: perfil.php?erro=arquivo_grande");
        exit();
    }

    $infoImagem = getimagesize($_FILES['foto']['tmp_name']);
    if ($infoImagem === false) {
        header("Location: perfil.php?erro=nao_e_imagem");
        exit();
    }

    $pastaDestino = __DIR__ . '/images/perfil/';

    if (!is_dir($pastaDestino)) {
        mkdir($pastaDestino, 0775, true);
    }

    $nomeArquivo = 'user_' . $id . '_' . time() . '.' . $extensao;
    $caminhoDestino = $pastaDestino . $nomeArquivo;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoDestino)) {

        $sql = "UPDATE usuarios SET foto = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $nomeArquivo, $id);
        $stmt->execute();

        header("Location: perfil.php?sucesso=1");
        exit();
    } else {
        header("Location: perfil.php?erro=upload_falhou");
        exit();
    }
}

header("Location: perfil.php");
exit();
?>