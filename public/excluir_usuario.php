<?php

include ("../infra/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM usuario WHERE id_usuario = '$id'";

mysqli_query($conn, $sql);

header ("Location: usuarios_cadastrados.php");

?>