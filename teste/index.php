<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
</head>

<header>Tabela de produto</header>

<body>
    <main>

        <h1>Produtos</h1>

        <form method="post" action="Texte.php">

            <label for="codigo_produto">codigo do produto: </label>

            Quantidade de Produtos:
            <?php

            echo"<br>";

            for($a = 1; $a < 10; $a++){
                echo"<input type = 'text' name ='".$a."coluna'/>";
                echo"<br><br>";

            }
            ?>

            <input type = "submit" name="calcularQTD" value="Nome do produto"/>
        </form>
        </html>