<body> <html> <head>
 <title>Resultado da alteracao</title>
 </head> </body>
  
<?php
$servername = "localhost";
$database = "atividade_carro";
$username = "root";
$password = "";
$dados = "";
$dados        = $_POST["dados"];
$idcarro       = $dados[0];
$car_placa     = $dados[1];
$car_modelo = $dados[2];
$car_chassi   = $dados[3];
$car_cor   = $dados[4]; 

echo  "<br>",$idcarro;
echo  "<br>",$car_placa;
echo  "<br>",$car_modelo;
echo  "<br>",$car_chassi;
echo  "<br>",$car_cor;

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
        "UPDATE carro
        set 
        car_placa  = '$car_placa',
        car_modelo = '$car_modelo',
        car_chassi = '$car_chassi', 
        car_cor    = '$car_cor' 
        WHERE idcarro = $idcarro";    
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$idcarro;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="2; URL='carro_teste.php'"/>
</body>
</html>