<?php

include ("../infra/conexao.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
$email = $_POST["email"];
$perfil = $_POST["perfil"];
$id = $_GET["id"];

$sql = "UPDATE usuario SET nome = ?, usuario = ?, senha = ?, email = ?, perfil = ? WHERE id_usuario = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "sssssi", $nome, $usuario, $senha, $email, $perfil, $id);

mysqli_stmt_execute($stmt);

header ("Location: usuarios_cadastrados.php");

?>