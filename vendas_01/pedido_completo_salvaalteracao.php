<body> <html> <head>
 <title>Resultado da alteracao</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = "";
$dados        = $_POST["dados"];
$id_itens_pedido       = $dados[0];
$id_pedido     = $dados[1];
$id_produto = $dados[2];
$quantidade   = $dados[3];
$valor   = $dados[4];

echo  $id_itens_pedido;
echo  $id_pedido;
echo  $id_produto;
echo  $quantidade;
echo  $valor;



// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
echo "<br>Conectado com sucesso<br>";
// Verifica escolha de campos
if(isset($_POST["dados"]))
    {

        $sql = 
        "UPDATE itens_pedido 
        set 
        id_itens_pedido     = '$id_itens_pedido',
        id_pedido = '$id_pedido',
        id_produto   = '$id_produto', 
        quantidade   = '$quantidade', 
        valor   = '$valor'
        WHERE id_itens_pedido = $id_itens_pedido";    
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$id_itens_pedido;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='pedido_completo.html'"/>
</body>
</html>