<?php
include_once "consts.php";
// Cria a conexão
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Define o conjunto de caracteres como UTF-8
mysqli_set_charset($conn, "utf8");
?>