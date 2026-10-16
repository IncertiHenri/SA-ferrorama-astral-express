<?php

include("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}

if (!isset($_SESSION['usuario']) || ($_SESSION['tipo'] !== 'admin')) {
    header("Location: ../index.php");
    exit();
    
}

$sql_trem = "SELECT * FROM trem";
$resultado_trem = mysqli_query($conn, $sql_trem);

if ($resultado_trem === false) {
    die('Erro na procura de trens: ' . mysqli_error($conn));
}

$sql_usuario = "SELECT * FROM usuario";
$resultado_usuario = mysqli_query($conn, $sql_usuario);

if ($resultado_usuario === false) {
    die('Erro na procura de usuários: ' . mysqli_error($conn));
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Cadastro de rotas</title>
</head>

<body id="cadastro_sensores">

    <header>

        <div id="navbar">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>

        </div>

    </header>

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

            <button class='botao_menu' id='botao_menu_usuarios_cadastrados' onclick='usuariosCadastrados()'>
                Usuários cadastrados
                </button>

        </div>
    </div>

    <button class="botao_superior" id="botao_voltar" onclick="visualizacaoRotas()">
        <img src="../assets/img/sair.png" alt="voltar">
        Voltar
    </button>

<main id="main_cadastro_sensores">

    <div class="fundo_cadastros">

        <div class="cadastros">

                <div class="borda_verde_flex">
                    <h1 class="texto_cadastro">Cadastrar Rota</h1>
                </div>

            <div class="tabela">

                <div class="borda_verde">
                    <form action="cadastro_nova_rota.php" method="POST" id="formulario_cadastro_sensores">

                        <div class="flex_column">
                            <div class="flex" id="campos_cadastro_sensores">
                                <div class="flex_column">
                                    <label for="origem" class="texto_cadastros">Origem</label>
                                    <input type="text" name="origem" class="campo_cadastros">
                                </div>

                                <div class="flex_column">
                                    <label for="destino" class="texto_cadastros">Destino</label>
                                    <input type="text" name="destino" class="campo_cadastros">
                                </div>
                                <div class="flex_column">
                                    <label for="tempo" class="texto_cadastros">Tempo</label>
                                    <input type="time" name="tempo" class="campo_cadastros">
                                </div>
                                <div class="flex_column">
                                    <label for="trem_associado" class="texto_cadastros">Trem Associado</label>
                                    <select name="trem_associado" class="campo_cadastros">
                                  <option value="">Selecione um Trem</option>
                                  <?php
                                  while ($trem = mysqli_fetch_assoc($resultado_trem)) {
                                    echo "<option value='{$trem['id_trem']}'>{$trem['nome']}</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="flex_column">
                                    <label for="usuario_associado" class="texto_cadastros">Usuário Associado</label>
                                    <select name="usuario_associado" class="campo_cadastros">
                                  <option value="">Selecione um Usuário</option>
                                  <?php
                                  while ($usuario = mysqli_fetch_assoc($resultado_usuario)) {
                                    echo "<option value='{$usuario['id_usuario']}'>{$usuario['nome']}</option>";
                                    }
                                    ?>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="botao_formulario_cadastro_sensor">Cadastrar</button>
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