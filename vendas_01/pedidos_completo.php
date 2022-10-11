<link rel="stylesheet" href="home.css">

<h1> Carrinho atual:</h1>
<body> <html> <head>
<title>Resultado da pesquisa</title>
</head> </body>

 <table border="1" style='width:50%'>
 <tr> <th>ID</th> <th>ID pedido</th> <th>ID produto</th> <th>QUANTIDADE</th> <th>VALOR</th>  <th>VALORTOTAL</th> </tr>
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";

$campo=["id_itens_pedido", "id_pedido", "id_produto", 
        "quantidade", "valor"];
$i=0;
$sequencia="";
$comando="";

// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
 
// echo "<br>Conectado com sucesso<br>";

// if ($comando <> "")
//      $sql = "SELECT * FROM itens_pedido where $comando";   
// else
    
$sql = "SELECT * FROM itens_pedido"; 
// $sql = "SELECT prod_nome, id_itens_pedido, id_pedido, id_produto, quantidade, valor 
// FROM vendas_01.cadastro_de_produto, vendas_01.itens_pedido 
// WHERE id_itens_pedido = id_itens_pedido ";     
$vtt = 0;
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
 while ($registro = mysqli_fetch_array($resultado))
 {
   $id_itens_pedido       = $registro['id_itens_pedido'];
   $id_pedido     = $registro['id_pedido'];
   $id_produto = $registro['id_produto'];
   $quantidade  = $registro['quantidade'];
   $valor   = $registro['valor'];
   $valorTotal = (int)$quantidade * (int)$valor;
//    $prod_nome = $registro['prod_nome'];
   $vtt = $valorTotal + $vtt;

 
   echo "<tr>";
   echo "<td>".$id_itens_pedido."</td>";
   echo "<td>".$id_pedido."</td>";
//    echo "<td>".$prod_nome."</td>";
   echo "<td>".$id_produto."</td>";
   echo "<td>".$quantidade."</td>";
   echo "<td>".$valor."</td>";
   echo "<td>".$valorTotal."</td>";
   
   echo "<td>
         <form action='pedido_completo_delete.php' method='post'>
         <center> 
         <input type='hidden' name='dado' value=".$id_pedido.">
         <input type=submit value='Deletar' ></form>";
    echo "<td>
            <form action='pedido_completo_alteracao.php' method='post'>
            <center> 
            <input type='hidden' name='dado' value=".$id_itens_pedido.">
            <input type=submit value='Alterar' ></form>";

	
    echo"</tr>";
    }



mysqli_close($conn);
echo"</table>";
echo"<table>";
echo"<tr> <th>valor total de tudo:</th> </tr>";
echo"<td>".$vtt."</td>";
echo"</table>";
?>

</body>
</html>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Pedidos completos</title>
		
	</head>
	<body>
		<main>
		<h1>Cadastre um novo pediodo: </h1>
			<form method="post" action="pedido_completo_inserir.php">

            <br><br><h2>Pedido:</h2>
				<br><br>
				<select name='PEDIDOS'>
					
					<?php   
	 
					$servername = "localhost";
					$database = "vendas_01";
					$username = "root";
					$password = "";
	 
					$conn = mysqli_connect($servername, $username, $password, $database);
					if(!$conn){
						die("falha na conexão: ". mysqli_connect_error());
					}
	 
					$sql = "SELECT * FROM cadastro_de_pedido";
	 
					$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");
	 
					while( $registro = mysqli_fetch_array($resultado))
					{
						$idcad_ped = $registro['idcad_ped'];
						$idcad_ped = $registro['idcad_ped'];
		
						echo "<option value='$idcad_ped '>$idcad_ped</option>";
	 
					}
					mysqli_close($conn);
					?>
	 
				</select>
				<br><br>


				<h1>itens do pedido</h1>

			<br><br><h2>Produto:</h2>
				<br><br>
				<select name='PRODUTO'>
					
					<?php   
	 
					$servername = "localhost";
					$database = "vendas_01";
					$username = "root";
					$password = "";
	 
					$conn = mysqli_connect($servername, $username, $password, $database);
					if(!$conn){
						die("falha na conexão: ". mysqli_connect_error());
					}
	 
					$sql = "SELECT * FROM cadastro_de_produto ";
	 
					$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");
	                
					while( $registro = mysqli_fetch_array($resultado))
					{
						$idcad_prod  = $registro['idcad_prod'];
						$prod_nome = $registro['prod_nome'];
		
						echo "<option value='$idcad_prod'>$prod_nome</option>";
	 
					}
					mysqli_close($conn);
					?>
	 
				</select>
				<br><br>

				<?php

                echo"<br><br>";
				echo"<label for='Quanidade'>Digite a quantidade</label>";
				echo"<input type='text' id='Peso' name='QUANTIDADE' />";

                echo"<br><br>";
				echo"<label for='valor'>Digite o valor</label>";
				echo"<input type='text' id='Valor' name='VALOR' />";


            ?>

                <input type="submit" value="Enviar " class="enviar">
				</form>
        </main>
    </body>
</html>
            

<html>
    <body>
        <br><br>
        <form method="post" action="pedidos_completo.php">
        <input type="submit" value="Voltar no inicio da pagina"> 
		</form>
		<form method="post" action="home.html">
        <input type="submit" value="Voltar ao inicio">
		</form>   
    </body>
</html>


