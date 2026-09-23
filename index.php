<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Login</title>
</head>

<body id="body_login">

    <div class="login_esquerdo">
            <img src="assets/img/trem.PNG" alt="trem" class="trem">
            <div class="inline_block">
                <div class="inline_flex">
                    <h1 class="titulo_login">ASTRAL</h1>
                    <h4 class="titulo2_login">EXPRESS</h4>
                </div>
                <p class="subtitulo_login">SISTEMA DE MONITORAMENTO FERROVIÁRIO</p>
            </div>

        <div class="campo_login">

            <h3>Faça login para continuar sua jornada!</h3>

            <form id="login">
                <label for="email">E-mail:</label>
                <input type="email" id="email">

                <label for="senha">Senha:</label>
                <input type="password" id="senha">


                <button type="submit" id="botao_login">Entrar</button>

                <p class="texto_cadastro">
                    Ainda não fez o cadastro?
                    <a href="public/cadastro.html">Cadastre-se!</a>
                </p>
            </form>
        </div>
    </div>

        <img id="imagem_estacao" src="assets/img/estacao_2.png" alt="estacao">

    <script src="scripts/script.js"></script>
</body>

</html>