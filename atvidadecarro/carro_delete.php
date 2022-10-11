<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>DELETE</title>
		<link rel="stylesheet" href="carro.css">
	</head>
    <h1>Qual ID carro voce deseja deletar ?<h1> 
	<body>
		<main>
			<form method="post" action="delete_carro.php">

            <?php
                echo"<br><br>";
                echo"<label for='id'>ID</label>";
                echo"<input type='text' id='Id' name='ID' />";

            ?>
                <input type="submit" value="Enviar " class="enviar">
               
            </form>
                <br><br>
                <form method="post" action="carro_teste.html">
                <input type="submit" value="Voltar uma pagina">
        </main>
    </body>
</html>
