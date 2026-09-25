<?php


?>
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

                <button class="botao_menu_atual" id="botao_menu_usuarios_cadastrados" onclick="usuariosCadastrados()">
                    <img class="imagem_botao_menu" src="../assets/img/usuarios.png" alt="usuarios_cadastrados">
                    Usuários cadastrados
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

                <div class="tabela">

                    <div class="borda_verde">

                        <form action="cadastrar_usuarios.php" method="POST" id="formulario_cadastro_usuarios">

                            <div class="flex_column">
                                <div class="flex" id="campos_cadastro_usuarios">
                                    <div class="flex_column">
                                        <label for="nome" class="texto_cadastros">Nome</label>
                                        <input type="text" name="nome" class="campo_cadastros">
                                    </div>

                                    <div class="flex_column">
                                        <label for="usuario" class="texto_cadastros">Usuário</label>
                                        <input type="text" name="usuario" class="campo_cadastros">
                                    </div>

                                    <div class="flex_column">
                                        <label for="email" class="texto_cadastros">E-mail</label>
                                        <input type="email" name="email" class="campo_cadastros">
                                    </div>

                                    <div class="flex_column">
                                        <label for="senha" class="texto_cadastros">Senha</label>
                                        <input type="password" name="senha" class="campo_cadastros">
                                    </div>

                                    <div class="flex_column">
                                       <label for="tipo_perfil" class="texto_cadastros">Tipo de cargo</label>
                                       <select name="tipo_perfil" id="tipo_perfil" class="campo_cadastros">
                                        <option value="1">Funcionário</option>
                                        <option value="2">Administrador</option>
                                    </select>

                                    </div>

                                </div>
                                <button type="submit" id="botao_formulario_cadastro_sensor">Cadastrar</button>

                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>

    </main>


    <script src="../scripts/script.js"></script>

</body>

</html>