<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Visualização de trens</title>
</head>

<body id="visualizacao_trens">
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

            <button class="botao_menu_atual" id="botao_menu_cadastro_trens" onclick="visualizacaoTrens()">
                <img class="imagem_botao_menu" src="../assets/img/trem_botao.png" alt="trem_botao">
                Visualização de trens
            </button>

            <button class="botao_menu" id="botao_menu_monitoramento" onclick="monitoramentoTempoReal()">
                <img class="imagem_botao_menu" src="../assets/img/monitoramento_tempo.png" alt="monitoramento">
                Monitoramento em tempo real
            </button>

            <button class="botao_menu" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                <img class="imagem_botao_menu" src="../assets/img/cadastro_relatorios.png" alt="cadastro_relatorios">
                Cadastro de Relatórios
            </button>

            <button class="botao_menu" id="botao_menu_usuarios_cadastrados" onclick="usuariosCadastrados()">
                <img class="imagem_botao_menu" src="../assets/img/usuarios.png" alt="usuarios_cadastrados">
                Usuários cadastrados
            </button>

        </div>
    </div>
  <div class="fundo_cadastros">

            <div class="cadastros">

                <div class="borda_verde_flex">
                    <h2 id="titulo_tabela">Visualização de Trens</h2>
                </div>

                <div class="tabela">

                    <div class="borda_verde">

                        <table>

                            <tr>
                                <td>ID do Trem</td>
                                <td>Localização</td>
                                <td>Tipo de Dado</td>
                                <td>Ação</td>
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>Linha A</td>
                                <td>Velocidade</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>02</td>
                                <td>Linha B</td>
                                <td>Temperatura</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>03</td>
                                <td>Linha C</td>
                                <td>Falha</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>Linha D</td>
                                <td>Velocidade</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>05</td>
                                <td>Linha E</td>
                                <td>Temperatura</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>06</td>
                                <td>Linha F</td>
                                <td>Falha</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>07</td>
                                <td>Linha G</td>
                                <td>Velocidade</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>08</td>
                                <td>Linha H</td>
                                <td>Velocidade</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>09</td>
                                <td>Linha I</td>
                                <td>Falha</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                            <tr>
                                <td>10</td>
                                <td>Linha J</td>
                                <td>Temperatura</td>
                                <td><button id="botao2">Visualizar</button></td>
                                <td><button id="botao2" onclick="alerta()">Excluir</button></td>
                            </tr>

                        </table>

                    </div>
                </div>

                <div class="borda_verde_flex">
                   <a href= "cadastro_trens.php"><button  class="botao_menu" id="botao_menu_cadastro_trens" onclick="cadastro_trens()" id="botao_sensor_novo">Cadastrar Novo Trem</button></a>
                </div>

            </div>
        </div>
    <script src="../scripts/script.js"></script>

</body>

</html>