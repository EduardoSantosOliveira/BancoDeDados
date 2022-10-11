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
$idcad_cli       = $dados[0];
$cli_nome     = $dados[1];
$cli_endereco = $dados[2];
$cli_cpf   = $dados[3];
$cli_rg   = $dados[4];
$cli_nascimento   = $dados[5];
$cli_estado      = $dados[6]; 
$cli_telefone      = $dados[7];

echo  $idcad_cli;
echo  $cli_nome;
echo  $cli_endereco;
echo  $cli_cpf;
echo  $cli_rg;
echo  $cli_nascimento;
echo  $cli_estado;
echo  $cli_telefone;

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
        "UPDATE cadastro_de_clientes 
        set 
        cli_nome     = '$cli_nome',
        cli_endereco = '$cli_endereco',
        cli_cpf   = '$cli_cpf', 
        cli_rg   = '$cli_rg', 
        cli_nascimento   = '$cli_nascimento', 
        cli_estado      = '$cli_estado',
        cli_telefone      = '$cli_telefone'
        WHERE idcad_cli = $idcad_cli";    
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$idcad_cli;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='cliente_home.html'"/>
</body>
</html>