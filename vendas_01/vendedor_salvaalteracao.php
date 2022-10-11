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
$idcad_vend       = $dados[0];
$vend_nome     = $dados[1];
$vend_endereco = $dados[2];
$vend_cpf   = $dados[3];
$vend_rg   = $dados[4];
$vend_horario   = $dados[5];
$vend_nascimento   = $dados[6];
$vend_telefone   = $dados[7];

/*echo  $idcad_ped;
echo  $idcad_cli;
echo  $idcad_vend;
echo  $ped_transportadora;
echo  $ped_valorFrete;
echo  $ped_endereco;*/


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
        "UPDATE cadastro_de_vendedores 
        set 
        idcad_vend     = '$idcad_vend',
        vend_nome = '$vend_nome',
        vend_endereco   = '$vend_endereco', 
        vend_cpf   = '$vend_cpf', 
        vend_rg   = '$vend_rg',
        vend_horario   = '$vend_horario', 
        vend_nascimento   = '$vend_nascimento',
        vend_telefone   = '$vend_telefone' 
        WHERE idcad_vend = $idcad_vend";    
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$idcad_vend;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='vendedor_home.html'"/>
</body>
</html>