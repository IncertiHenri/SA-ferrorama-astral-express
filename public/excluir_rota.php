<?php

include("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

$id = $_GET["id"];

$sql = "DELETE FROM trem_rota WHERE id_rota = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$sql = "DELETE FROM rota WHERE id_rota = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: visualizacao_rotas.php");
    exit();
    
} else {
    echo "Erro ao excluir a rota: " . mysqli_error($conn);
}

?>