<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro</title>
		<link rel="stylesheet" href="home.css">
	</head>
	<body>
		<main>
		<h1>Cadastre um novo produto: </h1>
			<form method="post" action="produto_inclusao.php">
    
            <?php

                echo"<br><br>";
				echo"<label for='nome'>digite o nome do produto</label>";
				echo"<input type='text' id='Nome' name='NOME' />";

                echo"<br><br>";
				echo"<label for='preco'>digite o preco do produto</label>";
				echo"<input type='text' id='Preco' name='PRECO' />";

                echo"<br><br>";
				echo"<label for='quantidade'>Quem e a quantidade</label>";
				echo"<input type='text' id='Quantidade' name='QUANTIDADE' />";

                echo"<br><br>";
				echo"<label for='peso'>digite o peso</label>";
				echo"<input type='text' id='Peso' name='PESO' />";

                echo"<br><br>";
				echo"<label for='categoria'>Digite a categoria</label>";
				echo"<input type='text' id='Categoria' name='CATEGORIA' />";


            ?>
                <input type="submit" value="Enviar " class="enviar">
				
            </form>
			<br><br>
				<form method="post" action="produto_home.html">
				<input type="submit" value="Voltar uma pagina">
        </main>
    </body>
</html>