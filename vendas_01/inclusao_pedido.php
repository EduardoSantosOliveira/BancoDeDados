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
			<form method="post" action="pedido_inclusao.php">
    
            <?php

                echo"<br><br>";
				echo"<label for='transportadora'>Quem e a transportadora</label>";
				echo"<input type='text' id='Transportadora' name='TRANSPORTADORA' />";

                echo"<br><br>";
				echo"<label for='valorfrete'>digite o valor do frete</label>";
				echo"<input type='text' id='Valorfrete' name='VALORFRETE' />";

                echo"<br><br>";
				echo"<label for='endereco'>Digite o endereco</label>";
				echo"<input type='text' id='Endereco' name='ENDERECO' />";

				/*echo"<br><br>";
				echo"<label for='cliente'>digite o numero do id do cliente</label>";
				echo"<input type='text' id='Cliente' name='CLIENTE' />";

                echo"<br><br>";
				echo"<label for='vendedor'>digite o numero do id do vendedor</label>";
				echo"<input type='text' id='Vendedor' name='VENDEDOR' />";*/

            ?>
		    <br><br>Clientes:
				<br><br>
				<select name="clientes">
					
					<?php   
	 
					$servername = "localhost";
					$database = "vendas_01";
					$username = "root";
					$password = "";
	 
					$conn = mysqli_connect($servername, $username, $password, $database);
					if(!$conn){
						die("falha na conexão: ". mysqli_connect_error());
					}
	 
					$sql = "SELECT * FROM cadastro_de_clientes";
	 
					$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");
	 
					while( $registro = mysqli_fetch_array($resultado))
					{
						$idcad_cli = $registro['idcad_cli'];
						$cli_nome = $registro['cli_nome'];
		
						echo "<option value='$idcad_cli '>$cli_nome</option>";
	 
					}
					mysqli_close($conn);
					?>
	 
				</select>
				<br><br>

			<br><br>Vendedores:
				<br><br>
				<select name="vendedor">
					
					<?php   
	 
					$servername = "localhost";
					$database = "vendas_01";
					$username = "root";
					$password = "";
	 
					$conn = mysqli_connect($servername, $username, $password, $database);
					if(!$conn){
						die("falha na conexão: ". mysqli_connect_error());
					}
	 
					$sql = "SELECT * FROM cadastro_de_vendedores ";
	 
					$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");
	                
					while( $registro = mysqli_fetch_array($resultado))
					{
						$idcad_vend = $registro['idcad_vend'];
						$vend_nome = $registro['vend_nome'];
		
						echo "<option value='$idcad_vend'>$vend_nome</option>";
	 
					}
					mysqli_close($conn);
					?>
	 
				</select>
				<br><br>

                <input type="submit" value="Enviar " class="enviar">
				
            </form>
			<br><br>
				<form method="post" action="pedido_home.html">
				<input type="submit" value="Voltar uma pagina">
        </main>
    </body>
</html>