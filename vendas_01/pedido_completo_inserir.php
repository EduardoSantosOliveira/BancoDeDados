<body>
<h1>Resultado do cadastro: </h1>
<link rel="stylesheet" href="home.css">
<?php

$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$id_pedido = $_POST['PEDIDOS'];
$id_produto = $_POST['PRODUTO'];
$quantidade = $_POST['QUANTIDADE'];
$valor = $_POST['VALOR'];

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

//echo "conectado com suscesso";

//inserir atributos
$sql = " INSERT INTO  itens_pedido (
                                        id_itens_pedido, 
                                        id_pedido,
                                        id_produto, 
                                        quantidade, 
                                        valor ) 
                                        
                    VALUES (
                            '',
                            '$id_pedido',
                            '$id_produto',
                            '$quantidade',
                            '$valor' )";


if(mysqli_query($conn, $sql)){
    //echo "<br>registro gravado com sucesso";

}
else{
    echo "error: ".$sql. "<br>". mysqli_error($conn);

}


mysqli_close($conn);
?>




<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>

 <table border="1" style='width:50%'>
 <tr> <th>ID</th> <th>ID pedido</th> <th>ID produto</th> <th>QUANTIDADE</th> <th>VALOR</th> </tr>

<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";

$campo=["id_itens_pedido", "id_pedido", "id_produto", 
        "quantidade", "valor" ];
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

if ($comando <> "")
     $sql = "SELECT * FROM itens_pedido where $comando";   
else
    $sql = "SELECT * FROM itens_pedido";     

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
 while ($registro = mysqli_fetch_array($resultado))
 {
   $id_itens_pedido       = $registro['id_itens_pedido'];
   $id_pedido     = $registro['id_pedido'];
   $id_produto = $registro['id_produto'];
   $quantidade  = $registro['quantidade'];
   $valor   = $registro['valor'];
 
   echo "<tr>";
   echo "<td>".$id_itens_pedido."</td>";
   echo "<td>".$id_pedido."</td>";
   echo "<td>".$id_produto."</td>";
   echo "<td>".$quantidade."</td>";
   echo "<td>".$valor."</td>";
	echo"</tr>";
    }



mysqli_close($conn);
echo"</table>";
?>
<html>
    <body>
        <br><br>
        <form method="post" action="pedidos_completo.php">
        <input type="submit" value="Voltar no inicio da pagina">
    </body>
</html>