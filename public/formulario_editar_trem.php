<?php

include("../infra/conexao.php");

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit();
}

$id = $_GET["id"];

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/style/style.css">

    <title>Trens cadastrados</title>
</head>

<body id="usuarios_cadastrados">

    <header>
        <div id="navbar">
            <p>Olá, Admin</p>
            <img src="../assets/img/usuario.png" alt="admin" class="imagem_usuario">
            <button id="botao_sair" onclick="sair()">Sair do Sistema</button>
        </div>
    </header>


    <main id="main_visualizacao_sensores">

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

            <button class="botao_menu_atual" id="botao_menu_cadastro_trens" onclick="visualizacaoTrens()">
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

                    $cod = "<button class='botao_menu_atual' id='botao_menu_cadastro_trens' onclick='visualizacaoTrens()'>
                Visualização de Trens
                </button>";

                    echo $cod;
                }

                ?>

            </div>
        </div>

        <button class="botao_superior" id="botao_voltar" onclick="visualizacaoTrens()">
            <img src="../assets/img/sair.png" alt="voltar">
            Voltar
        </button>

        <div class="fundo_cadastros">

            <div class="cadastros">

                <div class="borda_verde_flex">
                    <h1 class="texto_cadastro">Atualizar trens</h1>
                </div>

                <div class="tabela">

                    <div class="borda_verde">

                        <form action="editar_trens.php?id=<?php echo $id ?>" method="POST"
                            id="formulario_editar_trem">

                            <div class="flex_column">
                        <div class="flex" id="campos_cadastro_trens">
                            <div class="flex_column">
                                <label for="nome" class="texto_cadastros">Nome</label>
                                <input type="text" name="nome" class="campo_cadastros">
                            </div>

                            <div class="flex_column">
                                <label for="modelo" class="texto_cadastros">Modelo</label>
                                <input type="text" name="modelo" class="campo_cadastros">
                            </div>

                            <div class="flex_column">
                                <label for="capacidade" class="texto_cadastros">Capacidade</label>
                                <input type="number" name="capacidade" class="campo_cadastros">
                            </div>

                            <div class="flex_column">
                                <label for="status" class="texto_cadastros">Status do trem</label>
                                <select name="status" class="campo_cadastros">
                                    <option value="">Selecione</option>
                                    <option value="ativo">Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" id="botao_formulario_cadastro_trens">Atualizar</button>

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