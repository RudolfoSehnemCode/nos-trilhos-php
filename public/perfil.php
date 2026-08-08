<?php
include __DIR__ . '/../src/config/db.php';

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

$sql = "SELECT nome, cpf, cargo, email, foto FROM usuarios WHERE id = ?";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    $corSidebar = 'sidebar1--inicio';
    $corBotao = 'abrir-btn1--preto';
    $posicaoBotao = 'abrir-btn1--posicao-inicio';

    include __DIR__ . '/../src/partials/sidebar.php';
    ?>

    <main class="container py-5" style="max-width: 600px;">

        <?php if (isset($_GET['sucesso'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Foto atualizada com sucesso!
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['erro'])): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php
                $mensagensErro = [
                    'formato_invalido' => 'Formato de arquivo inválido. Use JPG ou PNG.',
                    'arquivo_grande'   => 'Arquivo muito grande. O limite é 2MB.',
                    'nao_e_imagem'     => 'O arquivo enviado não é uma imagem válida.',
                    'upload_falhou'    => 'Falha ao enviar a imagem. Tente novamente.',
                ];
                echo $mensagensErro[$_GET['erro']] ?? 'Ocorreu um erro.';
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="card shadow-sm border-0">
            <div class="card-body p-4 text-center">

                <h2 class="mb-4 fw-bold">Editar perfil</h2>

                <div class="pfp-wrapper mb-3">
                    <div class="pfp mx-auto">
                        <img id="preview-foto"
                            src="<?= !empty($usuario['foto']) ? 'images/perfil/' . htmlspecialchars($usuario['foto']) : 'images/default-avatar.png' ?>"
                            alt="Foto de Perfil">
                    </div>

                    <form action="atualizar_foto.php" method="POST" enctype="multipart/form-data" class="mt-3">
                        <div class="mb-2 d-flex justify-content-center">
                            <input type="file" id="input-foto" name="foto" accept="image/png, image/jpeg, image/jpg"
                                class="form-control form-control-sm w-auto" onchange="previewFoto(this)">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="bi bi-upload"></i> Atualizar foto
                        </button>
                    </form>
                </div>

                <hr class="my-4">

                <div class="text-start">
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span class="text-muted"><i class="bi bi-person me-2"></i>Username</span>
                        <span class="fw-semibold"><?= htmlspecialchars($usuario['nome']) ?></span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span class="text-muted"><i class="bi bi-card-text me-2"></i>CPF</span>
                        <span class="fw-semibold"><?= htmlspecialchars($usuario['cpf']) ?></span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span class="text-muted"><i class="bi bi-briefcase me-2"></i>Cargo</span>
                        <span class="fw-semibold"><?= htmlspecialchars($usuario['cargo']) ?></span>
                    </div>
                    <div class="d-flex justify-content-between py-2">
                        <span class="text-muted"><i class="bi bi-envelope me-2"></i>Email</span>
                        <span class="fw-semibold"><?= htmlspecialchars($usuario['email']) ?></span>
                    </div>
                </div>

                <hr class="my-4">

                <form action="deletar_usuario.php" method="POST">
                    <button type="submit" name="delete_usuario" value="1" class="btn btn-outline-danger btn-sm"
                        onclick="return confirm('Tem certeza que deseja excluir sua conta? Essa ação não pode ser desfeita.')">
                        <i class="bi bi-trash3"></i> Excluir usuário
                    </button>
                </form>

            </div>
        </div>
    </main>

    <footer>
        <div class="rodape">NOS TRILHOS</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewFoto(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('preview-foto').src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>