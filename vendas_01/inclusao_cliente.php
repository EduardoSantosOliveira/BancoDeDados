<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro</title>
		<link rel="stylesheet" href="home.css">
	</head>
	<body>
		<main>
		<h1>Cadastre um novo cliente: </h1>
			<form method="post" action="cliente_inclusao.php">
    
            <?php

                echo"<br><br>";
				echo"<label for='nome'>Nome</label>";
				echo"<input type='text' id='Nome' name='NOME' />";

                echo"<br><br>";
				echo"<label for='endereco'>Endereco</label>";
				echo"<input type='text' id='Endereco' name='ENDERECO' />";

                echo"<br><br>";
				echo"<label for='cpf'>Cpf</label>";
				echo"<input type='text' id='Cpf' name='CPF' />";

                echo"<br><br>";
				echo"<label for='rg'>Rg</label>";
				echo"<input type='text' id='Rg' name='RG' />";

                echo"<br><br>";
				echo"<label for='nascimento'>Nascimento</label>";
				echo"<input type='text' id='Nascimento' name='NASCIMENTO' />";

                echo"<br><br>";
				echo"<label for='estado'>Estado</label>";
				echo"<input type='text' id='Estado' name='ESTADO' />";

                echo"<br><br>";
				echo"<label for='telefone'>Telefone</label>";
				echo"<input type='text' id='Telefone' name='TELEFONE' />";

            ?>
                <input type="submit" value="Enviar " class="enviar">
				
            </form>
			<br><br>
				<form method="post" action="home.html">
				<input type="submit" value="Voltar uma pagina">
        </main>
    </body>
</html>