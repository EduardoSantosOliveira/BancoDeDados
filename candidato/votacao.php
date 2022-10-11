<!-- <html>
    <head>
        <title>votacao</title>
    </head>
    <body>
        <h1>VOTE  NO SEU CANDIDATO:</h1>
        <br>
        <form action="votacaoConfirmar.php" method="post">
        <br><br>
	    <label for='numero'>Numero</label>
		<input type='text' id='Numero' name='NUMERO' />
        <input type="submit" value="Enviar" />
        </form>
    </body>
</html> -->


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="votacao.css">
</head>
<body>
    <main>


<form action="votacaoConfirmar.php" method="post">
   <P>VOTE NO SEU CANDIDATO: </P>

            <br>
                <input type="text" name="dado[]" placeholder="digite o NUMERO ">
                <input type="submit" value="VOTAR">
            </form>
        </main>
    </body>
</html>