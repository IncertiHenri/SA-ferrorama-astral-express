<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Usuários cadastrados</title>
</head>

<body id="usuarios_cadastrados">

    <header>
        <div id="navbar_tela_inicial">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
        </div>
    </header>


      <main id="main_visualizacao_sensores">

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
                <img class="imagem_botao_menu" src="../assets/img/cadastro_sensores.png" alt="cadastro_sensores"> Visualização de Sensores
            </button>

            <button class="botao_menu" id="botao_menu_cadastro_trens" onclick="visualizacaoTrens()">
                <img class="imagem_botao_menu" src="../assets/img/trem_botao.png" alt="trem_botao"> Visualização de trens
            </button>

            <button class="botao_menu" id="botao_menu_monitoramento" onclick="monitoramentoTempoReal()">
                <img class="imagem_botao_menu" src="../assets/img/monitoramento_tempo.png" alt="monitoramento"> Monitoramento em tempo real
            </button>

            <button class="botao_menu" id="botao_menu_cadastro_relatorios" onclick="cadastroRelatorios()">
                <img class="imagem_botao_menu" src="../assets/img/cadastro_relatorios.png" alt="cadastro_relatorios"> Cadastro de Relatórios
            </button>

            <button class="botao_menu_atual" id="botao_menu_usuarios_cadastrados" onclick="usuariosCadastrados()">
                <img class="imagem_botao_menu" src="../assets/img/usuarios.png" alt="usuarios_cadastrados"> Usuários cadastrados
            </button>
            </div>
        </div>

         <button class="botao_superior" id="botao_voltar" onclick="usuariosCadastrados()">
    <img src="../assets/img/sair.png" alt="voltar">
    Voltar
</button>

        <div class="fundo_cadastros">

            <div class="cadastros">

                <div class="borda_verde_flex">
                    <h1 class="texto_cadastro">Cadastro de Usuários</h1>
                </div>

                <form action="#" method="post">

                <div class="tabela">

                    <div class="borda_verde">

                        <table>

                            <tr>
                                <th>Nome</th>
                                <th>Usuário</th>
                                <th>E-mail</th>
                                <th>Senha</th>
                            </tr>

                            <tr>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="email"></td>
                                <td><input type="password"></td>
                            </tr>

                        </table>

                    </div>
                </div>

                <div class="borda_verde_flex">
                    <button id="botao_sensor_novo">Salvar</button>
                </div>

            </form>

            </div>
        </div>

    </main>


    <script src="../scripts/script.js"></script>

</body>

</html>