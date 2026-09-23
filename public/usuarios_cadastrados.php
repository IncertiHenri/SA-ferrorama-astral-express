<?php

include ("../infra/conexao.php");

$sql = "SELECT id_usuario, nome, usuario, email FROM usuario";
$resultado = mysqli_query($conn, $sql);

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

        <div id="tabelas_monitoramento">

            <div class="fundo_tabela_monitoramento">

                <div class="texto_cadastro">
                    <h1>Usuários cadastrados</h1>
                </div>

                <div class="tabela_monitoramento">

                    <table>

                        <tr>
                            <th>Matrícula</th>
                            <th>Nome</th>
                            <th>Usuário</th>
                            <th>E-mail</th>
                            <th>Cargo</th>

                        </tr>

                        <?php
                        
                        while ($usuario = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td>" . $usuario["id_usuario"] . "</td>";
                            echo "<td>" . $usuario["nome"] . "</td>";
                            echo "<td>" . $usuario["usuario"] . "</td>";
                            echo "<td>" . $usuario["email"] . "</td>";
                            echo "<td>" . $usuario["perfil"] . "</td>";
                            echo "<td> <a href='excluir_usuario.php?id=" . $usuario["id_usuario"] . "'> <button class='botao_crud'>Excluir</button> </a> </td>";
                            echo "<td> <a href='formulario_editar_usuario.php?id=" . $usuario["id_usuario"] . "'> <button class='botao_crud'>Atualizar</button> </a> </td>";
                            echo "</tr>";
                        }

                        ?>
                    </table>

                </div>

                <br> <br> <button id="botao_sensor_novo" onclick="cadastroUsuarios()"> Cadastrar Usuário</button>
                

            </div>

        </div>

    </main>


    <script src="../scripts/script.js"></script>

</body>

</html>
