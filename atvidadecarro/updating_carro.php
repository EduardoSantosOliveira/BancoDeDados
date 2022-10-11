<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="carro.css">
</head>
<body>
    <main>


<form action="carro_updating.php" method="post">
   <P>Preencha os campo que deseja faxer o updating</P>
                <br><br>
				<label for='id'>ID: </label>
				<input type='number' id='Id' name='ID' required/>
                
                <label for ="escolha">Escolha o campo que deseja alterar:</label>
                <select name="ESCOLHA">
                    <option>PLACA</option>
                    <option>MODELO</option>
                    <option>CHASSI</option>
                    <option>COR</option>
                </selcet>

                <label for='resultado'>RESULTADO:</label>
				<input type='text' id='resultado' name='RESULTADO' required/>

                <input type="submit" value="Enviar " class="enviar">
             
            </form>
                <br><br>
                <form method="post" action="carro_teste.html">
                <input type="submit" value="Voltar uma pagina">
        </main>
    </body>
</html>
