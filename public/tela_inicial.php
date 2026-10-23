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



    <title>Tela Inicial</title>
</head>

<body id="body_tela_inicial">

    <header>
        <div id="navbar">
            <p class="acesso_admin">Olá, <?php echo $_SESSION['user']; ?>!</p>
            <p class="clima">Joinville | <span id="temperatura">Carregando...</span></p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <div class="sem_flex">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
            </div>
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
                <button class="botao_menu_atual" id="botao_menu_tela_inicial" onclick="telaInicial()">
                    Tela inicial
                </button>

                <button class='botao_menu' id='botao_menu_usuarios_cadastrados' onclick='landingPage ()'>
                    Landing Page 
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

                <button class='botao_menu' id='botao_menu_usuarios_cadastrados' onclick='usuariosCadastrados()'>
                    Usuários cadastrados
                </button>

            </div>
        </div>


        <div class="conteudo_principal">

            <img src="../assets/img/banner_trem.jpg" alt="trem" class="banner_trem">

            <div class="area_boas_vindas">

                <div>
                    <h2 class="titulo_boas_vindas">Bem vindo(a), <?php echo $_SESSION['user']; ?>!</h2>

                    <p class="descricao_boas_vindas">
                        Acompanhe em tempo real o desempenho da malha ferroviária, gerencie
                        sensores e trens, visualize relatórios e monitore os usuários do sistema
                        de forma prática, rápida e eficiente.
                    </p>
                </div>

            </div>

    </main>

    <script src="../scripts/script.js"></script>

</body>

</html>