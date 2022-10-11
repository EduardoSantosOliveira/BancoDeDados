<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">

 <table border="1" style='width:50%'>
 <tr> <th>ID pedido</th> <th>ID produto</th> <th>QUANTIDADE</th> <th>VALOR</th> </tr>


<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";

$dado = $_POST["dado"];
echo $dado. "novo";

// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
 
echo "<br>Conectado com sucesso<br>";
 
// Verifica escolha de campos

     $sql = "SELECT * FROM itens_pedido where id_itens_pedido = $dado";   
     $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

 // loop para ler todos os registros
$registro = mysqli_fetch_array($resultado);
 
  echo  $registro['id_itens_pedido'];
  echo  $registro['id_pedido'];
  echo  $registro['id_produto'];
  echo  $registro['quantidade'];
  echo  $registro['valor'];
 

   echo "<tr>";
   echo "<form action='pedido_completo_salvaalteracao.php' method='post'>";
         echo "<input type='hidden'   name='dados[]'  value=".$registro['id_itens_pedido'].">";
         echo '<td><input type="text" name="dados[]"   value="'.$registro['id_pedido'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['id_produto'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['quantidade'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['valor'].'"></td>';
         echo "<td></tr><tr></table>
      
         <center> 
         <input type=submit value='Alterar' ></form>";

 mysqli_close($conn);
 echo "</table>"
 ?>
</body>
</html>