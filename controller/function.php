<?php

//incluir dados na tabela
function IncluirDados($tabela, $dados=null, $nomes=null, $sql="") {
    include "conexao.php";
    date_default_timezone_set('America/Sao_Paulo');

    if (!$conn) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    if (empty($sql) == true) {
        if(empty($tabela) || empty($dados) || empty($nomes)){
          return false;
        }
        $sql = "INSERT INTO {$tabela} (" . implode(", ", $nomes) . ") VALUES (" . str_repeat("?, ", count($nomes) - 1) . "?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, str_repeat("s", count($dados)), ...$dados);
    }
    else {
        $stmt = mysqli_prepare($conn, $sql);
    }

    mysqli_stmt_execute($stmt);
    $id = mysqli_stmt_insert_id($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $id;
}
