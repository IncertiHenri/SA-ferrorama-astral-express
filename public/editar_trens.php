<?php

include ("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../index.php");
    exit();

}

$nome = $_POST["nome"];
$modelo = $_POST["modelo"];
$capacidade = $_POST["capacidade"];
$status = $_POST["status"];
$id = $_GET["id"];
$id_usuario = $_SESSION['id_usuario'];


$sql = "UPDATE trem SET nome = ?, modelo = ?, capacidade = ?, status = ? WHERE id_trem = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sssii",$nome,$modelo,$capacidade,$status,$id);

$stmt->execute();

header ("Location: visualizacao_trens.php");
exit;

?>