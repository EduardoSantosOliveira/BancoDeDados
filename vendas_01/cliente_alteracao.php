<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">
 
 <table border="1" style='width:50%'>
 <tr> <th>NOME</th> <th>ENDERECO</th> <th>CPF</th> <th>RG</th> <th>NASCIMENTO</th> <th>ESTADO</th> <th>TELEFONE</th> </tr>

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

     $sql = "SELECT * FROM cadastro_de_clientes where idcad_cli = $dado";   
     $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

 // loop para ler todos os registros
$registro = mysqli_fetch_array($resultado);
 
  echo  $registro['idcad_cli'];
  echo  $registro['cli_nome'];
  echo  $registro['cli_endereco'];
  echo  $registro['cli_cpf'];
  echo  $registro['cli_rg'];
  echo  $registro['cli_nascimento'];
  echo  $registro['cli_estado'];
  echo  $registro['cli_telefone'];
 
   echo "<tr>";
   echo "<form action='cliente_salvaalteracao.php' method='post'>";
         echo "<input type='hidden'   name='dados[]'   value=".$registro['idcad_cli'].">";
         echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_nome'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_endereco'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_cpf'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_rg'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_nascimento'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_estado'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_telefone'].'"></td>';
         echo "<td></tr><tr></table>;

         <center> 
         <input type=submit value='Alterar' ></form>";

 mysqli_close($conn);
 echo "</table>";
 ?>
</body>
</html>