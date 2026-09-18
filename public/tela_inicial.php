<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Tela Inicial</title>
</head>

<body id="body_tela_inicial">

    <header>
        <div id="navbar_tela_inicial">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
        </div>
    </header>


    <main id="main_tela_inicial">

        <div class="menu">

            <img src="../assets/img/trem.PNG" alt="trem" class="trem_menu">

            <div class="inline_block">
                <div class="inline_flex">
                    <h1 class="titulo_menu">ASTRAL</h1>
                    <h4 class="titulo2_menu">EXPRESS</h4>
                </div>

                <p class="subtitulo_menu">SISTEMA DE MONITORAMENTO FERROVIÁRIO</p>
            </div>

            <div id="botoes_menu">
                <button class="botao_menu_atual" id="botao_menu_tela_inicial" onclick="telaInicial()">
                    <img class="imagem_botao_menu" src="../assets/img/tela_inicial.png" alt="tela_inicial"> Tela inicial
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_sensores" onclick="visualizacaoSensores()">
                    <img class="imagem_botao_menu" src="../assets/img/cadastro_sensores.png" alt="cadastro_sensores">
                    Visualização de Sensores
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_trens" onclick="visualizacaoTrens()">
                    <img class="imagem_botao_menu" src="../assets/img/trem_botao.png" alt="trem_botao">
                    Visualização de trens
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_rotas" onclick="visualizacaoRotas()">
                    <img class="imagem_botao_menu" src="../assets/img/recarregar.png" alt="trem_botao">
                    Visualização de rotas
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                    <img class="imagem_botao_menu" src="../assets/img/cadastro_relatorios.png"
                        alt="cadastro_relatorios">
                    Visualização de Relatórios
                </button>

                <button class="botao_menu" id="botao_menu_monitoramento" onclick="monitoramentoTempoReal()">
                    <img class="imagem_botao_menu" src="../assets/img/monitoramento_tempo.png" alt="monitoramento">
                    Monitoramento em tempo real
                </button>

                <button class="botao_menu" id="botao_menu_usuarios_cadastrados" onclick="usuariosCadastrados()">
                    <img class="imagem_botao_menu" src="../assets/img/usuarios.png" alt="usuarios_cadastrados">
                    Usuários cadastrados
                </button>
            </div>
        </div>


        <div class="conteudo_principal">

            <div class="area_boas_vindas">

                <div>
                    <h2 class="titulo_boas_vindas">Bem vindo(a), Admin!</h2>

                    <p class="descricao_boas_vindas">
                        Acompanhe em tempo real o desempenho da malha ferroviária, gerencie
                        sensores e trens, visualize relatórios e monitore os usuários do sistema
                        de forma prática, rápida e eficiente.
                    </p>
                </div>

                <img src="../assets/img/trem_boas_vindas.png" alt="trem" class="imagem_trem_boas_vindas">

            </div>


            <div class="container_botoes">

                <button class="botao_tela_inicial" onclick="visualizacaoSensores()">
                    <img src="../assets/img/cadastro_sensores.png" alt="cadastro_de_sensores_e_trens"
                        class="imagem_cadastro_sensores">
                    <span>Cadastro de Sensores e Trens</span>
                </button>

                <button class="botao_tela_inicial" onclick="monitoramentoTempoReal()">
                    <img src="../assets/img/monitoramento_tempo.png" alt="monitoramento_em_tempo_real"
                        class="imagem_cadastro_sensores">
                    <span>Monitoramento em Tempo Real</span>
                </button>

                <button class="botao_tela_inicial" onclick="cadastroRelatorios()">
                    <img src="../assets/img/cadastro_relatorios.png" alt="cadastro_de_relatorios"
                        class="imagem_cadastro_sensores">
                    <span>Cadastro de Relatórios</span>
                </button>

                <button class="botao_tela_inicial" onclick="usuariosCadastrados()">
                    <img src="../assets/img/usuarios.png" alt="usuarios_cadastrados" class="imagem_cadastro_sensores">
                    <span>Usuários cadastrados</span>
                </button>

            </div>

        </div>

    </main>


    <script src="../scripts/script.js"></script>

</body>

</html>