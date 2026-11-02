<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha"; 
$dbname = "nos_trilhos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
