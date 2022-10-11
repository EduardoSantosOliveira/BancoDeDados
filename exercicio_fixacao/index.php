<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro</title>
	</head>
	<body>
		<main>
			<form method="post" action="conecta_banco.php">

            <?php

                echo"<br><br>";
				echo"<label for='nome'>Nome</label>";
				echo"<input type='text' id='Nome' name= 'NOME' required/>";

                echo"<br><br>";
				echo"<label for='endereco'>Endereco</label>";
				echo"<input type='text' id='Endereco' name='ENDERECO' required/>";
                echo"<br><br>";
				echo"<label for='bairro'>Bairro</label>";
				echo"<input type='text' id='bairro' name='BAIRRO' required/>";

                echo"<br><br>";
				echo"<label for='cidade'>Cidade</label>";
				echo"<input type='text' id='cidade' name='CIDADE' required/>";

                echo"<br><br>";
                echo"<label for='estado'>estado</label>";
				echo"<input type='text' id='estado' name='ESTADO' required/>";
                
                echo"<br><br>";
                echo"<label for='cep'>cep</label>";
				echo"<input type='text' id='cep' name='CEP' required/>";
                echo"</tr>";
                echo"</table>";

            ?>

                <input type="submit" value="Enviar " class="enviar">
            </form>
        </main>
    </body>
</html>