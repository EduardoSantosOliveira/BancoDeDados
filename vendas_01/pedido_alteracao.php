<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">

 <table border="1" style='width:50%'>
 <tr> <th>ID DO CLIENTE</th> <th>ID DO VENDEDOR</th> <th>TRANSPORTADORA</th> <th>VALOR DO FRETE</th> <th>ENDERECO</th> </tr>
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

     $sql = "SELECT * FROM cadastro_de_pedido where idcad_ped = $dado";   
     $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

 // loop para ler todos os registros
$registro = mysqli_fetch_array($resultado);
 
  echo  $registro['idcad_ped'];
  echo  $registro['ped_cli'];
  echo  $registro['ped_vend'];
  echo  $registro['ped_transportadora'];
  echo  $registro['ped_valorFrete'];
  echo  $registro['ped_endereco'];
 
   echo "<tr>";
   echo "<form action='pedido_salvaalteraco.php' method='post'>";
         echo "<input type='hidden'   name='dados[]'   value=".$registro['idcad_ped'].">";
         echo '<td><input type="text" name="dados[]"   value="'.$registro['ped_cli'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['ped_vend'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['ped_transportadora'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['ped_valorFrete'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['ped_endereco'].'"></td>';
         echo "<td></tr><tr></table>'

         <center> 
         <input type=submit value='Alterar' ></form>";

 mysqli_close($conn);
 echo "</table>"
 ?>
</body>
</html>