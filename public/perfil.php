<?php
include __DIR__ . '/../src/config/db.php';

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

$sql = "SELECT nome, cpf, cargo, email FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();

if (!$usuario) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    $corSidebar = 'sidebar1--inicio';
    $corBotao = 'abrir-btn1--preto';
    $posicaoBotao = 'abrir-btn1--posicao-inicio';

    include __DIR__ . '/../src/partials/sidebar.php';
    ?>


    <main>
        <div class="profile">
            <h2>Editar perfil</h2>
        </div>
        <div class="pfp">
            <img src="" alt="Foto de Perfil">
        </div>
        <div class="itens-perfil">
            <p>Username: <?= htmlspecialchars($usuario['nome']) ?></p>
            <p>Cpf: <?= htmlspecialchars($usuario['cpf']) ?></p>
            <p>Cargo: <?= htmlspecialchars($usuario['cargo']) ?></p>
            <p>Email: <?= htmlspecialchars($usuario['email']) ?></p>
        </div>
        <div class="delete">
            <div>
                <form action="deletar_usuario.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_usuario" value="1" class="btn btn-danger btn-sm"
                        onclick="return confirm('Tem certeza que deseja excluir sua conta? Essa ação não pode ser desfeita.')">
                        Excluir usuário
                    </button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="rodape">NOS TRILHOS</div>
    </footer>
</body>


</html>