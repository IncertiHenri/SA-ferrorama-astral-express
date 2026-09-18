<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Monitoramento em Tempo Real</title>
</head>

<body id="body_monitoramento">

    <header>
        <div id="navbar_tela_inicial">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
        </div>
    </header>

    <main id="main_monitoramento">

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

                <button class="botao_menu" id="botao_menu_cadastro_rotas" onclick="visualizacaoRotas()">
                    <img class="imagem_botao_menu" src="../assets/img/recarregar.png" alt="trem_botao">
                    Visualização de rotas
                </button>

                <button class="botao_menu" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                    <img class="imagem_botao_menu" src="../assets/img/cadastro_relatorios.png" alt="cadastro_relatorios">
                    Visualização de Relatórios
                </button>

                <button class="botao_menu_atual" id="botao_menu_monitoramento" onclick="monitoramentoTempoReal()">
                    <img class="imagem_botao_menu" src="../assets/img/monitoramento_tempo.png" alt="monitoramento">
                    Monitoramento em tempo real
                </button>

                <button class="botao_menu" id="botao_menu_usuarios_cadastrados" onclick="usuariosCadastrados()">
                    <img class="imagem_botao_menu" src="../assets/img/usuarios.png" alt="usuarios_cadastrados">
                    Usuários cadastrados
                </button>
            </div>
        </div>

        <div id="tabelas_monitoramento">

            <div class="fundo_tabela_monitoramento">

                <div class="tabela_monitoramento">

                    <table>

                        <tr>
                            <th>ID</th>
                            <th>Velocidade</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td id="linha_1">01</td>
                            <td>100 km/h</td>
                            <td>Normal</td>
                        </tr>

                        <tr>
                            <td id="linha_2">02</td>
                            <td>140 Km/h</td>
                            <td>Alerta</td>
                        </tr>

                        <tr>
                            <td id="linha_3">03</td>
                            <td>80 km/h</td>
                            <td>Normal</td>
                        </tr>

                        <tr>
                            <td id="linha_4">04</td>
                            <td>80 km/h</td>
                            <td>Normal</td>
                        </tr>

                        <tr>
                            <td id="linha_5">05</td>
                            <td>100 km/h</td>
                            <td>Normal</td>
                        </tr>

                        <tr>
                            <td id="linha_6">06</td>
                            <td>100 km/h</td>
                            <td>Normal</td>
                        </tr>

                        <tr>
                            <td id="linha_7">07</td>
                            <td>80 km/h</td>
                            <td>Falha</td>
                        </tr>

                        <tr>
                            <td id="linha_8">08</td>
                            <td>120 km/h</td>
                            <td>Normal</td>
                        </tr>

                        <tr>
                            <td id="linha_9">09</td>
                            <td>35 km/h</td>
                            <td>Normal</td>
                        </tr>

                        <tr>
                            <td id="linha_10">10</td>
                            <td>120 km/h</td>
                            <td>Alerta</td>
                        </tr>

                    </table>

                </div>

            </div>

            <div class="fundo_tabela_mapa">

                <div class="mapa_monitoramento">
                    <img id="mapa_trilho" src="../assets/img/mapa_trilho.png" alt="mapa_de_monitoramento">
                </div>

            </div>

        </div>

    </main>

    <script src="../scripts/script.js"></script>

</body>

</html>
