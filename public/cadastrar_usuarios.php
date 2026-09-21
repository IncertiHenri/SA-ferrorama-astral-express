<?php

include ("../infra/conexao.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario (nome, usuario, email, senha) VALUES ('$nome', '$usuario', '$email', '$senha')";

mysqli_query($conn, $sql);

header ("Location: ../public/usuarios_cadastrados.php");