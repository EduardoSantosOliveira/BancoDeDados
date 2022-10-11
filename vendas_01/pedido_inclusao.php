<!DOCTYPE html>
<html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <title>cadastro pedido</title>
                <link rel="stylesheet" href="home.css">
            </head>
            </body>
</html>
<h1>Resultado do cadastro: </h1>

<?php

$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$ped_cli = $_POST['clientes'];
$ped_vend = $_POST['vendedor'];
$ped_transportadora = $_POST['TRANSPORTADORA'];
$ped_valorFrete = $_POST['VALORFRETE'];
$ped_endereco = $_POST['ENDERECO'];

echo $ped_cli;
echo $ped_vend;

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

echo "conectado com suscesso";

//inserir atributos
$sql = " INSERT INTO  cadastro_de_pedido (
                                            idcad_ped, 
                                            ped_transportadora,
                                            ped_valorFrete, 
                                            ped_endereco, 
                                            ped_cli, 
                                            ped_vend ) 
                                            
                                        VALUES (
                                        '',
                                        '$ped_transportadora',
                                        '$ped_valorFrete',
                                        '$ped_endereco',
                                        '$ped_cli',
                                        '$ped_vend' )";

if(mysqli_query($conn, $sql)){
    //echo "<br>registro gravado com sucesso";

}
else{
    echo "error: ".$sql. "<br>". mysqli_error($conn);

}


mysqli_close($conn);
?>



<body> <html> <head>

<title>Resultado da pesquisa:</title>
    
</head> </body> 

<table border="1" style='width:50%'>
<tr> <th>ID</th> <th>ID DO CLINTE</th> <th>ID DO VENDEDOR</th> <th>TRANSPORTADORA</th> <th>VALOR DO FRETE</th> <th>ENDERECO DA ENTREGA</th> </tr>

<?php

$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$Campo = ["idcad_ped", "ped_cli","ped_vend","ped_transportadora", "ped_valorFrete","ped_endereco" ];
$i = 0;
$sequencia = "";
$comando = "";


//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}


//echo "conectado com suscesso";

/*if(isset($_POST["dado"]))
{
    foreach($_POST["dado"] as $dado)
    {
        if($dado <> "")
        {
            if($sequencia == "")
                $sequencia = 1 ;
            
            else
            $comando = $comando. " and ";

            $comando = $comando . $Campo[$i]."="."'".$dado."' ";
            echo"-  " . $Campo[$i] . "---". $dado. "<br>";
        }
        $i++;
    }
    echo $comando;
}
else{
     echo "nenhum campo selecionado";
}*/


$sql = "SELECT cli_nome, vend_nome, idcad_ped, ped_transportadora, ped_valorFrete, ped_endereco, ped_cli, ped_vend 
FROM vendas_01.cadastro_de_clientes, vendas_01.cadastro_de_vendedores, vendas_01.cadastro_de_pedido 
WHERE ped_cli = idcad_cli AND ped_vend = idcad_vend 
ORDER BY idcad_cli ASC ";


$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while ($registro = mysqli_fetch_array($resultado))
 {
   $idcad_ped       = $registro['idcad_ped'];
   $cli_nomes = $registro['cli_nome'];
   $vend_nomes = $registro['vend_nome'];
   $ped_transportadora = $registro['ped_transportadora'];
   $ped_valorFrete  = $registro['ped_valorFrete'];
   $ped_endereco   = $registro['ped_endereco'];
   
 
   echo "<tr>";
   echo "<td>".$idcad_ped."</td>";
   echo "<td>".$cli_nomes."</td>";
   echo "<td>".$vend_nomes."</td>";
   echo "<td>".$ped_transportadora."</td>";
   echo "<td>".$ped_valorFrete."</td>";
   echo "<td>".$ped_endereco."</td>";
   echo "<tr>";
 }

mysqli_close($conn);
echo"</table>";
?>
</body>
</html>

<html>
    <body>
        <br><br>
        <form method="post" action="pedido_home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>