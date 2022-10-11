<body> <html> <head>
 <title>Resultado da exclusao</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">
 
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$chave = $_POST["dado"];
echo $chave;

// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
echo "<br>Conectado com sucesso<br>";
// Verifica escolha de campos

if(isset($_POST["dado"]))
    {
    $sql = "DELETE from itens_pedido WHERE id_pedido = $chave";   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    }
 mysqli_close($conn);

 ?>

<meta http-equiv="refresh" content="0; URL='pedidos_completo.php'"/>
</body>
</html>