<?php
include __DIR__ . '/../src/config/db.php'; 
session_start();

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['senha'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_cargo'] = $user['cargo'];
            header("Location: dashboard.php");
            exit();
        } else {
            $msg = "Login inválido.";
        }
    } else {
        $msg = "Login inválido.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login - NOS TRILHOS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <h2 class="topo1">NOS TRILHOS</h2>
</header>

<div class="login_id">
    <img class="img-login" src="images/account.png" alt="Login"/>
    <div class="texto1">
        <?php if (!empty($msg)): ?>
            <div style="color: red; font-size: 16px; margin-bottom: 10px;">
                <?= htmlspecialchars($msg) ?>
            </div>
        <?php endif; ?>

        <form id="loginForm" method="POST">
            <div class="input-box">
                <div class="img-input">
                    <img src="images/email.png" alt="email icon">
                    <input type="email" id="email" name="email" required placeholder="Email...">
                </div>
            </div>

            <br>

            <div class="input-box">
                <div class="img-input">
                    <img src="images/padlock.png" alt="padlock icon">
                    <input type="password" id="password" name="password" required placeholder="Senha...">
                </div>
            </div>

            <div class="Remenber-me">
                <input type="checkbox">
                
            </div>

            <div class="btn">
                <button type="submit" class="button1">Login</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>