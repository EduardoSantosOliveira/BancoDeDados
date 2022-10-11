<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 
 <table border="1" style='width:50%'>
 <tr> <th>PLACA</th> <th>MODELO</th> <th>CHASSI</th> <th>COR</th> </tr>

<?php
$servername = "localhost";
$database = "atividade_carro";
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

     $sql = "SELECT * FROM carro where idcarro = $dado";   
     $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

 // loop para ler todos os registros
$registro = mysqli_fetch_array($resultado);
 
  echo  $registro['idcarro'];
  echo  $registro['car_placa'];
  echo  $registro['car_modelo'];
  echo  $registro['car_chassi'];
  echo  $registro['car_cor'];
 
   echo "<tr>";
   echo "<form action='alteracao_concluida.php' method='post'>";
         echo "<input type='hidden'   name='dados[]'   value=".$registro['idcarro'].">";
         echo "<td><input type='text' name='dados[]'   value=".$registro['car_placa']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['car_modelo']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['car_chassi']."></td>";
         echo "<td><input type='text' name='dados[]'   value=".$registro['car_cor']."></td>";
         echo "<td></tr><tr></table>;

         <center> 
         <input type=submit value='Alterar' ></form>";

 mysqli_close($conn);
 echo "</table>";
 ?>
</body>
</html>