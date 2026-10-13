<?php

include("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario']) || !isset($_SESSION['tipo']) || ($_SESSION['tipo'] !== 'admin' && $_SESSION['tipo'] !== 'funcionario')) {
    
    header("Location: ../index.php");
    exit();
}

$sql = "SELECT * FROM rota";
$resultado = $conn->query($sql);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Visualização Rotas</title>
</head>

<body id="visualizacao_sensores">

    <header>
        <div id="navbar">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
        </div>
    </header>

    <main id="main_visualizacao_sensores">

        <div class="menu">

            <div class="conteiner_menu_logo">
            <img src="../assets/img/trem.PNG" alt="trem" class="trem_menu">

            <div class="inline_block">
                <div class="inline_flex">
                    <h1 class="titulo_menu">ASTRAL</h1>
                    <h4 class="titulo2_menu">EXPRESS</h4>
                </div>

                <p class="subtitulo_menu">SISTEMA DE MONITORAMENTO FERROVIÁRIO</p>
            </div>
        </div>

            <div id="botoes_menu">
                <button class="botao_menu" id="botao_menu_tela_inicial" onclick="telaInicial()">
                    Tela inicial
                </button>

                <button class="botao_menu" id="botao_menu_monitoramento" onclick="monitoramentoTempoReal()">
                    Monitoramento em tempo real
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_sensores" onclick="visualizacaoSensores()">
                    Visualização de Sensores
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_trens" onclick="visualizacaoTrens()">
                    Visualização de trens
                </button>

                <button class="botao_menu_atual" id="botao_menu_cadastro_rotas" onclick="visualizacaoRotas()">
                    Visualização de rotas
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                    Visualização de Relatórios
                </button>

                <?php

                if ($_SESSION['tipo'] === 'admin') {

                    $cod = "<button class='botao_menu' id='botao_menu_usuarios_cadastrados' onclick='usuariosCadastrados()'>
                Usuários cadastrados
                </button>";

                    echo $cod;
                }

                ?>

            </div>
        </div>

        <div class="fundo_cadastros">

            <div class="cadastros">

                <div class="borda_verde_flex">
                    <h2 id="titulo_tabela">Visualização de Rotas</h2>
                </div>

                <div class="tabela">

                    <div class="borda_verde">

                        <table>

                            <tr>
                                <td>ID da rota</td>
                                <td>Origem</td>
                                <td>Destino</td>
                                <td>Tempo</td>
                                <td>Trem Associado</td>
                                <td>Usuário Associado</td>
                                <td>Ação</td>
                            </tr>
                            <?php

                            while ($rota = mysqli_fetch_assoc($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $rota["id_rota"] . "</td>";
                                echo "<td>" . $rota["origem"] . "</td>";
                                echo "<td>" . $rota["destino"] . "</td>";
                                echo "<td>" . $rota["tempo"] . "</td>";
                                echo "<td>" . $rota["Trem Associado"] . "</td>";
                                echo "<td>" . $rota["Usuário Associado"] . "</td>";
                                echo "<td> <a href='excluir_rota.php?id=" . $rota["id_rota"] . "'> <button class='botao_crud'>Excluir</button> </a> </td>";
                                echo "<td> <a href='formulario_editar_rota.php?id=" . $rota["id_rota"] . "'> <button class='botao_crud'>Atualizar</button> </a> </td>";
                                echo "</tr>";
                            }

                            ?>

                        </table>

                    </div>
                </div>

                <div class="borda_verde_flex">
                    <button type="button" onclick="window.location.href='cadastro_rotas.php'" class="botao_formulario_cadastro_sensor">Cadastrar Nova Rota</button>
                </div>
        </div>

    </main>

    <script src="../scripts/script.js"></script>

</body>

</html>