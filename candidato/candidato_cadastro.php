<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Cadastro</title>
		<link rel="stylesheet" href="votacao.css">
	</head>
	<body>
		<main>
		<h1>Cadastre um novo candidato: </h1>
		<form action="cadastro_candidato.php" method="post" enctype="multipart/form-data" accept=".png, .jpeg, .jpg">
			<!-- <form method="post" action="cadastro_candidato.php"> -->
    
            

				<br><br>
				<label for="nome">Nome</label>
				<input type="text" id="Nome" name="NOME" />

				<br><br>
				<label for="numero">Numero</label>
				<input type="text" id="Numero" name="NUMERO" />
				<br>


				<!-- <form action="cadastro_candidato.php" method="post" enctype="multipart/form-data"> -->
				<br>
				Selecione o arquivo:<br>
				<input type="file" name="IMAGEM" />
				<br>
				<input type="submit" value="Enviar" />
            </form>
        </main>
    </body>
</html>