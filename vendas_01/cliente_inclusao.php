<!DOCTYPE html>
<html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <title>cadastro cliente</title>
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
$Cli_nome = $_POST['NOME'];
$Cli_endereco = $_POST['ENDERECO'];
$Cli_cpf = $_POST['CPF'];
$Cli_rg = $_POST['RG'];
$Cli_nascimento = $_POST['NASCIMENTO'];
$Cli_estado = $_POST['ESTADO'];
$Cli_telefone = $_POST['TELEFONE'];

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

//echo "conectado com suscesso";

//inserir atributos
$sql = " INSERT INTO  cadastro_de_clientes (
                                        idcad_cli, 
                                        cli_nome, 
                                        cli_endereco, 
                                        cli_cpf, 
                                        cli_rg,
                                        cli_nascimento,
                                        cli_estado,
                                        cli_telefone ) 
                                        
                    VALUES (
                            '',
                            '$Cli_nome',
                            '$Cli_endereco',
                            '$Cli_cpf',
                            '$Cli_rg', 
                            '$Cli_nascimento',
                            '$Cli_estado',
                            '$Cli_telefone' )";


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
<tr> <th>ID</th> <th>NOME</th>  
<th>ENDERECO</th> <th>CPF</th>
<th>RG</th> <th>NASCIMENTO</th>
<th>ESTADO</th> <th>TELEFONE</th></tr>

<?php

$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";


$Campo = ["idcad_cli", "cli_nome","cli_endereco","cli_cpf", "cli_rg","cli_nascimento","cli_estado","cli_telefone"];
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


$sql = "SELECT * FROM cadastro_de_clientes"; // where $comando";
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while($registro = mysqli_fetch_array($resultado)){

    $idcad_cli =      $registro['idcad_cli'];
    $cli_nome  =    $registro['cli_nome'];
    $cli_endereco  = $registro['cli_endereco'];
    $cli_cpf  = $registro['cli_cpf'];
    $cli_rg  =    $registro['cli_rg'];
    $cli_nascimento  =    $registro['cli_nascimento'];
    $cli_estado  =    $registro['cli_estado'];
    $cli_telefone  =    $registro['cli_telefone'];

    echo"<tr>";
    echo"<td>". $idcad_cli."</Td>";
    echo"<td>".  $cli_nome."</Td>";
    echo"<td>". $cli_endereco."</Td>";
    echo"<td>".  $cli_cpf."</Td>";
    echo"<td>".  $cli_rg ."</Td>";
    echo"<td>".  $cli_nascimento ."</Td>";
    echo"<td>".  $cli_estado ."</Td>";
    echo"<td>".  $cli_telefone ."</Td>";
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
        <form method="post" action="home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>