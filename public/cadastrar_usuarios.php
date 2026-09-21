<?php

include ("../infra/conexao.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];

if(empty($nome) || empty($usuario) || empty($senha) || empty($email)) {
    echo"<script>
        alert('Preencha todos os campos!');
        history.back();
    </script>";

    exit();
}

$sql = "INSERT INTO usuario (nome, usuario, email, senha) VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "ssss", $nome, $usuario, $email, $senha);

mysqli_stmt_execute($stmt);

header ("Location: ../public/usuarios_cadastrados.php");

?>