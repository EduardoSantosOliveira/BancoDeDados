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
    $sql = "DELETE from cadastro_de_vendedores WHERE idcad_vend = $chave";   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    }
 mysqli_close($conn);






 ?>
<meta http-equiv="refresh" content="0; URL='vendedor_home.html'"/>
</body>
</html>