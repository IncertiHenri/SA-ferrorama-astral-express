<?php

include ("../infra/conexao.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$perfil = $_POST["perfil"];
$id = $_GET["id"];

$sql = "UPDATE usuario SET nome = '$nome', usuario = 'usuario', senha = '$senha', email = 'email', perfil = 'perfil' WHERE id_usuario = '$id";

mysqli_query($conn, $sql);

header ("Location: usuarios_cadastrados.php");

?>