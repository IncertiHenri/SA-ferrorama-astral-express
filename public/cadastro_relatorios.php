<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Cadastro de Relatórios</title>
</head>

<body id="body_cadastro_relatorios">

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
                <img class="imagem_botao_menu" src="../assets/img/trem_botao.png" alt="trem_botao"> Visualização de
                trens
            </button>

            <button class="botao_menu" id="botao_menu_monitoramento" onclick="monitoramentoTempoReal()">
                <img class="imagem_botao_menu" src="../assets/img/monitoramento_tempo.png" alt="monitoramento">
                Monitoramento em tempo real
            </button>

            <button class="botao_menu_atual" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                <img class="imagem_botao_menu" src="../assets/img/cadastro_relatorios.png" alt="cadastro_relatorios">
                Cadastro de Relatórios
            </button>

            <button class="botao_menu" id="botao_menu_usuarios_cadastrados" onclick="usuariosCadastrados()">
                <img class="imagem_botao_menu" src="../assets/img/usuarios.png" alt="usuarios_cadastrados"> Usuários
                cadastrados
            </button>

        </div>

    </div>

    <main>
        <div class="fundo_cadastros">
            <div>
                <h1 class="titulo_relatorios">Visualização de Relatórios</h1>
                <div class="borda_verde_flex">
                    <div id="filtros_relatorios">
                        <h1 class="titulo_relatorios">Filtros <img class="imagem_filtrar" src="../assets/img/filtro.png" alt="filtro"></h1> 
                        </div>
                        <div>
                    <form action="" class="flex" id="formulario_visualizacao_relatorios">
                        <div class="flex_column">
                            <label for="data_inicio" class="texto_cadastro_relatorios">Data início</label>
                            <input type="date" name="data_inicio" class="campo_visualizacao_relatorios">
                        </div>
                        <div class="flex_column">
                            <label for="data_fim" class="texto_cadastro_relatorios">Data fim</label>
                            <input type="date" name="data_fim" class="campo_visualizacao_relatorios">
                        </div>
                        <div class="flex_column">
                            <label for="tipo_relatorio" class="texto_cadastro_relatorios">Tipo de relatório</label>
                            <select name="tipo_relatorio" id="tipo_relatorio" class="campo_visualizacao_relatorios">
                                <option value="1">Todos</option>
                                <option value="2">X</option>
                                <option value="3">X</option>
                                <option value="4">X</option>
                                <option value="5">X</option>
                            </select>
                        </div>
                        <div class="flex_column">
                            <label for="tipo_falha" class="texto_cadastro_relatorios">Tipo de falha</label>
                            <select name="tipo_falha" id="tipo_falha" class="campo_visualizacao_relatorios">
                                <option value="1">Todos</option>
                                <option value="2">X</option>
                                <option value="3">X</option>
                                <option value="4">X</option>
                                <option value="5">X</option>
                            </select>
                        </div>
                    
                        <button type="submit" id="botao_formulario_visualizar_relatorios"><img class="imagem_filtrar"
                                src="../assets/img/filtro.png" alt="filtro">Filtrar</button>
                    </form>
                    </div>
                </div>

                <h1 class="titulo_relatorios">Últimos Relatórios</h1>
                

                <div>
                    <div class="borda_verde_flex">
                        <div class="flex" id="ultimos_relatorios">
                            <h1 class="texto_cadastro_relatorios">Nome</h1>
                            <h1 class="texto_cadastro_relatorios">Data de Criação</h1>
                            <h1 class="texto_cadastro_relatorios">Tipo de relatório</h1>
                            <h1 class="texto_cadastro_relatorios">Ações</h1>
                        </div>
                    </div>
                    <div class="flex">
                    <div class="borda_verde_flex">

                    </div>
                    <div class="borda_verde_flex">

                    </div>
                    <div class="borda_verde_flex">

                    </div>
                    <div class="borda_verde_flex">

                    </div>
                    </div>
                </div>



                
            </div>
        </div>
    </main>

    <script src="../scripts/script.js"></script>

</body>

</html>