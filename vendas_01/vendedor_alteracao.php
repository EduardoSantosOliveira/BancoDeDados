<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">

 <table border="1" style='width:50%'>
 <tr> <th>NOME</th> <th>ENDERECO</th> <th>CPF</th> <th>RG</th> <th>HORARIO</th> <th>NASCIMENTO</th> <th>TELEFONE</th> </tr>

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

     $sql = "SELECT * FROM cadastro_de_vendedores where idcad_vend = $dado";   
     $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

 // loop para ler todos os registros
$registro = mysqli_fetch_array($resultado);
 
  echo  $registro['idcad_vend'];
  echo  $registro['vend_nome'];
  echo  $registro['vend_endereco'];
  echo  $registro['vend_cpf'];
  echo  $registro['vend_rg'];
  echo  $registro['vend_horario'];
  echo  $registro['vend_nascimento'];
  echo  $registro['vend_telefone'];
 

   echo "<tr>";
   echo "<form action='vendedor_salvaalteracao.php' method='post'>";
         echo "<input type='hidden'   name='dados[]'  value=".$registro['idcad_vend'].">";
         echo '<td><input type="text" name="dados[]"   value="'.$registro['vend_nome'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['vend_endereco'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['vend_cpf'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['vend_rg'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['vend_horario'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['vend_nascimento'].'"></td>';
         echo '<td><input type="text" name="dados[]"   value="'.$registro['vend_telefone'].'"></td>';
         echo "<td></tr><tr></table>;
      
         <center> 
         <input type=submit value='Alterar' ></form>";

 mysqli_close($conn);
 echo "</table>";
 ?>
</body>
</html>