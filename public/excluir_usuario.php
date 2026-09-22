<?php

include ("../infra/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM usuario WHERE id_usuario = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

header ("Location: usuarios_cadastrados.php");

?>