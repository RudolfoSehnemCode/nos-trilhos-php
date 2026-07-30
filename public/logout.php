<?php
include __DIR__ . "/../src/Auth.php";

session_start();
$auth = new Auth();

$auth-> logout();

?>