<?php

$id = $_GET["id"];

echo "Tem certeza que quer excluir?";
echo "<a href='excluir_usuario.php?id=$id'>Sim</a>";
echo "<a href='../index.php'>Não</a>";

?>