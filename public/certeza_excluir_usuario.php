<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <title>Confirmação de Exclusão</title>
</head>


        <?php

            $id = $_GET["id"];

            echo "<div class='fundo_cadastros'>";
            echo "<div class='cadastros'>";

            echo "<h2>Tem certeza que quer excluir?</h2>";

            echo "<div class='container_botoes'>";

            echo "<a class='botao_crud' href='excluir_usuario.php?id=$id'>Sim</a>";
            echo "<a class='botao_crud' href='usuarios_cadastrados.php'>Não</a>";

            echo "</div>";

            echo "</div>";
            echo "</div>";

            ?>


    <script src="../scripts/script.js"></script>

</body>

</html>
