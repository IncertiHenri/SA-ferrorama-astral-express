<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Cadastro de sensores</title>
</head>

<body id="cadastro_sensores">

    <header>

        <div id="navbar_tela_inicial">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>

        </div>

    </header>

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
                <button class="botao_menu" id="botao_menu_tela_inicial" onclick="telaInicial()">
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

                <button class="botao_menu_atual" id="botao_menu_cadastro_rotas" onclick="visualizacaoRotas()">
                    <img class="imagem_botao_menu" src="../assets/img/recarregar.png" alt="trem_botao">
                    Visualização de rotas
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                    <img class="imagem_botao_menu" src="../assets/img/cadastro_relatorios.png" alt="cadastro_relatorios">
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

    <main id="main_cadastro_sensores">

        <div class="campo_verde_medio_sensores">
            <div class="campo_borda_verde">
                <h1 class="titulo_cadastro_sensor">Cadastro de Novas Rotas</h1>
            </div>
            <div class="campo_borda_verde" id="campo_formulario_rotas">

            <div>
                <form action="#" id="formulario_cadastro_sensores">

                    <div class="flex_column">
                        <div class="flex" id="campos_cadastro_sensores">
                            <div class="flex_column">
                                <label for="origem" class="texto_cadastros">Origem</label>
                                <input type="text" name="nome" class="campo_cadastros">
                            </div>

                            <div class="flex_column">
                                <label for="destino" class="texto_cadastros">Destino</label>
                                <input type="text" name="loc" class="campo_cadastros">
                            </div>

                        </div>
                        <button type="submit" id="botao_formulario_cadastro_sensor">Cadastrar</button>

                    </div>
                </form>

            </div>
        </div>
        </div>
    </main>

    <script src="../scripts/script.js"></script>

</body>

</html>