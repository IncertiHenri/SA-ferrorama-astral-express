<?php

include("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Confirmação de Exclusão</title>
</head>

<body id="body_tela_inicial">

    <header>
        <div id="navbar">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
        </div>
    </header>


    <main id="main_tela_inicial">

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

                <button class="botao_menu" id="botao_menu_cadastro_rotas" onclick="visualizacaoRotas()">
                    Visualização de rotas
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                    Visualização de Relatórios
                </button>

                <?php

                if ($_SESSION['tipo'] === 'admin') {

                    $cod = "<button class='botao_menu_atual' id='botao_menu_usuarios_cadastrados' onclick='usuariosCadastrados()'>
                Usuários cadastrados
                </button>";

                    echo $cod;
                }

                ?>

            </div>
        </div>

        <?php

        $id = $_GET["id"];

        echo "<div class='fundo_confirmacao_exclusao'>";
        echo "<div class='confirmacao_exclusao'>";

        echo "<h2>Tem certeza que quer excluir?</h2>";
        echo "<div class='container_botoes'>";

        echo "<a class='botao_crud' href='excluir_usuario.php?id=$id'>Sim</a>";
        echo "<a class='botao_crud' href='usuarios_cadastrados.php'>Não</a>";

        echo "</div>";

        echo "</div>";
        echo "</div>";

        ?>


        <script src="../scripts/script.js"></script>

</body>

</html>