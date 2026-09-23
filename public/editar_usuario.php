<?php

include ("../infra/conexao.php");

$nome = $_POST["nome"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$id = $_GET["id"];

$sql = "UPDATE usuario SET nome = ?, usuario = ?, senha = ?, email = ? WHERE id_usuario = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssii",$nome,$usuario,$senha,$email,$id);

$stmt->execute();

header ("Location: usuarios_cadastrados.php");
exit;

?>