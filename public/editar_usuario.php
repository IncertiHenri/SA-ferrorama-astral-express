<?php

include ("../infra/conexao.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$perfil = $_POST["perfil"];
$id = $_GET["id"];

$sql = "UPDATE usuarios SET nome = '$nome', usuario = 'usuario', senha = '$senha', email = 'email', perfil = 'perfil' WHERE id = '$id";

mysqli_query($conn, $sql);

header ("Location: usuarios_cadastrados.php");

?>