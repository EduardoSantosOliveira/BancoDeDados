<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro</title>
	</head>
	<body>
		<main>
			<form method="post" action="cadastro.php">

            <?php

            for($i = 1; $i <= 10; $i++){

                echo"<br><br>";
                echo"Pessoa:".$i."<br>";
				echo"<label for='nome'>Nome</label>";
				echo"<input type='text' id='Nome' name='".$i."NOME' required/>";

                echo"<br><br>";
				echo"<label for='endereco'>Endereco</label>";
				echo"<input type='text' id='Endereco' name='".$i."ENDERECO' required/>";
                echo"<br><br>";
				echo"<label for='bairro'>Bairro</label>";
				echo"<input type='text' id='bairro' name='".$i."BAIRRO' required/>";

                echo"<br><br>";
				echo"<label for='cidade'>Cidade</label>";
				echo"<input type='text' id='cidade' name='".$i."CIDADE' required/>";

                echo"<br><br>";
                echo"<label for='estado'>estado</label>";
				echo"<input type='text' id='estado' name='".$i."ESTADO' required/>";
                
                echo"<br><br>";
                echo"<label for='cep'>cep</label>";
				echo"<input type='text' id='cep' name='".$i."CEP' required/>";
                echo"</tr>";
                echo"</table>";
            }

            ?>
                <input type="submit" value="Enviar dados do cadastro" class="enviar">
            </form>
        </main>
    </body>
</html>