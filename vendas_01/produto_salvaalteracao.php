<body class="resultado"> <html> <head>
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
$idcad_prod       = $dados[0];
$prod_nome     = $dados[1];
$prod_preco = $dados[2];
$prod_quantidade   = $dados[3];
$prod_peso   = $dados[4];
$prod_categoria   = $dados[5];

echo  $idcad_prod;
echo  $prod_nome;
echo  $prod_preco;
echo  $prod_quantidade;
echo  $prod_peso;
echo  $prod_categoria;


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
        "UPDATE cadastro_de_produto 
        set 
        idcad_prod     = '$idcad_prod',
        prod_nome = '$prod_nome',
        prod_preco   = '$prod_preco', 
        prod_quantidade   = '$prod_quantidade', 
        prod_peso  = '$prod_peso',
        prod_categoria = '$prod_categoria'
        WHERE idcad_prod = $idcad_prod";    
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$idcad_prod;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='produto_home.html'"/>
</body>
</html>