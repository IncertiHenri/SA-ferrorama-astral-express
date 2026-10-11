<?php

include("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

$origem = $_POST['origem'];
$destino = $_POST['destino'];
$usuario_associado = $_POST['usuario_associado'];
$trem_associado = $_POST['trem_associado'];

// Procurar o usuário digitado
$sql = "SELECT id_usuario FROM usuario WHERE usuario = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $usuario_associado);

$stmt->execute();

$resultado_usuario = $stmt->get_result();

if ($resultado_usuario->num_rows == 0) {
    echo "Usuário não encontrado no banco de dados.";
    exit();
}

$usuario = $resultado_usuario->fetch_assoc();
$id_usuario = $usuario['id_usuario'];

// Procurar o trem digitado
$sql = "SELECT id_trem FROM trem WHERE nome = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $trem_associado);

$stmt->execute();

$resultado_trem = $stmt->get_result();

if ($resultado_trem->num_rows == 0) {
    echo "Trem não encontrado no banco de dados.";
    exit();
}

$trem = $resultado_trem->fetch_assoc();
$id_trem = $trem['id_trem'];

// Cadastrar a rota
$sql = "INSERT INTO rota (origem, destino, id_usuario) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $origem, $destino, $id_usuario);

if ($stmt->execute()) {

    $id_rota = $conn->insert_id;

    // Associar o trem à rota
    $sql = "INSERT INTO trem_rota (id_trem, id_rota) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ii", $id_trem, $id_rota);
    
    $stmt->execute();

    header("Location: visualizacao_rotas.php");
    exit();

} else {
    echo "Erro ao cadastrar a rota.";
}

?>