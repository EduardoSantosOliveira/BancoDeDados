<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro</title>
		<link rel="stylesheet" href="carro.css">
	</head>
	<body>
		<main>
		<h1>Cadastre um novo veiculo: </h1>
			<form method="post" action="carro_cadastro.php">
    
            <?php

                echo"<br><br>";
				echo"<label for='placa'>Placa</label>";
				echo"<input type='text' id='Placa' name='PLACA' />";

                echo"<br><br>";
				echo"<label for='modelo'>Modelo</label>";
				echo"<input type='text' id='Modelo' name='MODELO' />";
                echo"<br><br>";
				echo"<label for='chassi'>Chassi</label>";
				echo"<input type='text' id='Chassi' name='CHASSI' />";

                echo"<br><br>";
				echo"<label for='cor'>Cor</label>";
				echo"<input type='text' id='Cor' name='COR' />";

            ?>
                <input type="submit" value="Enviar " class="enviar">
				
            </form>
			<br><br>
				<form method="post" action="carro_teste.html">
				<input type="submit" value="Voltar uma pagina">
        </main>
    </body>
</html>
            
    