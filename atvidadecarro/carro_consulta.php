<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 
 <table border="1" style='width:50%'>
 <tr>  <th>ID</th> <th>PLACA</th>
 <th>MODELO</th> <th>CHASI</th><th>COR</th>
  </tr>

<?php
$servername = "localhost";
$database = "atividade_carro";
$username = "root";
$password = "";

$campo=["idcarro", "car_placa", "car_modelo", 
        "car_chassi", "car_chassi"];
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
 
echo "<br>Conectado com sucesso<br>";
 
// Verifica escolha de campos
if(isset($_POST["dado"]))
{    
    // Faz loop para os dados
    foreach($_POST["dado"] as $dado)
    {
        if ( $dado <> "")
        {
            if ($sequencia == "")
                $sequencia=1;
            else
                $comando = $comando . " and ";
                      
            $comando = $comando . $campo[$i] ."="."'"
            .$dado."' ";
            echo "$comando <br>"; 
        }
        $i++;
    }
     
     
}
else
{
    echo "nenhum campo selecionado";
   
}


if ($comando <> "")
     $sql = "SELECT * FROM carro where $comando";   
else
    $sql = "SELECT * FROM carro";     

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
 while ($registro = mysqli_fetch_array($resultado))
 {
   $idcarro       = $registro['idcarro'];
   $car_placa     = $registro['car_placa'];
   $car_modelo = $registro['car_modelo'];
   $car_chassi  = $registro['car_chassi'];
   $car_cor   = $registro['car_cor'];
 
   echo "<tr>";
   echo "<td>".$idcarro."</td>";
   echo "<td>".$car_placa."</td>";
   echo "<td>".$car_modelo."</td>";
   echo "<td>".$car_chassi."</td>";
   echo "<td>".$car_cor."</td>";
   echo "<td>
         <form action='teste_deletecarro.php' method='post'>
         <center> 
         <input type='hidden' name='dado' value=".$idcarro.">
         <input type=submit value='Deletar' ></form>";

    echo "<td>
            <form action='teste_alteracaocarro.php' method='post'>
            <center> 
            <input type='hidden' name='dado' value=".$idcarro.">
            <input type=submit value='Alterar' ></form>";
    echo"</tr>";
    }



mysqli_close($conn);
echo"</table>";
?>
</body>
</html>

<html>
    <body>
        <br><br>
        <form method="post" action="carro_teste.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>








