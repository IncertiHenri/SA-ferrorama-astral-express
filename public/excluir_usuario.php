<?php

include ("../infra/conexao.php");

$id = $_GET["id"];

$sql = "DELETE * FROM usuarios WHERE id = '$id'";

mysqli_query($conn, $sql);

header ("Location: usuarios_cadastrados.php");

?>