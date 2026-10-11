<?php

include ("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../index.php");
    exit();

}

$origem = $_GET["origem"];
$destino = $_GET["destino"];
$id_rota = $_GET["id_rota"];
$id_usuario = $_GET['id_usuario'];
$id_trem = $_GET['id_trem'];


$sql = "UPDATE rota SET origem = ?, destino = ?, id_usuario = ?, id_trem = ? WHERE id_rota = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssiii", $origem, $destino, $id_usuario, $id_trem, $id_rota);

$stmt->execute();

header ("Location: visualizacao_rotas.php");
exit;

?>