<?php
include __DIR__ . '/../src/config/db.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['delete_usuario'])) {
    $id = $_SESSION['id'];

    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    session_destroy();
    header("Location: login.php");
    exit();
}

header("Location: perfil.php");
exit();
?>