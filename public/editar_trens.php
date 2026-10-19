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

if (mb_strlen($nome) < 3 || !preg_match('/^[\p{L} ]+$/u', $nome)) {
    echo "<script>
        alert('Nome inválido! O nome do trem deve conter apenas letras e no mínimo 3 caracteres.');
        window.location.href = 'formulario_editar_trem.php';
    </script>";
    exit;

} else if (mb_strlen($modelo) < 3) {
    echo "<script>
        alert('Modelo inválido! O modelo deve conter pelo menos 3 caracteres.');
        window.location.href = 'formulario_editar_trem.php';
    </script>";
    exit;

} else if (!is_numeric($capacidade) || $capacidade <= 0) {
    echo "<script>
        alert('Capacidade inválida! Informe um valor numérico maior que zero.');
        window.location.href = 'formulario_editar_trem.php';
    </script>";
    exit;

} else if (!in_array($status, ['ativo', 'inativo'])) {
    echo "<script>
        alert('Status inválido! Escolha um status válido.');
        window.location.href = 'formulario_editar_trem.php';
    </script>";
    exit;
}


$sql = "UPDATE trem SET nome = ?, modelo = ?, capacidade = ?, status = ? WHERE id_trem = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssisi",$nome,$modelo,$capacidade,$status,$id);

$stmt->execute();

header ("Location: visualizacao_trens.php");
exit;

?>