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
$idcad_ped       = $dados[0];
$idcad_cli     = $dados[1];
$idcad_vend = $dados[2];
$ped_transportadora   = $dados[3];
$ped_valorFrete   = $dados[4];
$ped_endereco   = $dados[5];

echo  $idcad_ped;
echo  $idcad_cli;
echo  $idcad_vend;
echo  $ped_transportadora;
echo  $ped_valorFrete;
echo  $ped_endereco;


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
        "UPDATE cadastro_de_pedido 
        set 
        ped_cli     = '$idcad_cli',
        ped_vend = '$idcad_vend',
        ped_transportadora   = '$ped_transportadora', 
        ped_valorFrete   = '$ped_valorFrete', 
        ped_endereco   = '$ped_endereco'
        WHERE idcad_ped = $idcad_ped";    
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$idcad_ped;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='pedido_home.html'"/>
</body>
</html>