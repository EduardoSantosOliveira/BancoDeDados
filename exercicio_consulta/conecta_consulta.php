<body> <html> <head>

<title>Resultado da pesquisa:</title>
    
</head> </body> 

<table border="1" style='width:50%'>
<tr> <th>ID</th> <th>Nome</th>  
<th>Endereço</th> <th>Cidade</th>
<th>Estado</th> <th>Cep</th> </tr>

<?php

$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";

$Campo = ["Cad_id", "Cad_nome","Cad_endereco","Cad_bairro", "Cad_cidade","Cad_estado","Cad_cep"];
$i = 0;
$sequencia = "";
$comando = "";


//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}


echo "conectado com suscesso";

if(isset($_POST["dado"]))
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
}


$sql = "SELECT * FROM banco_de_dados where $comando";
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while($registro = mysqli_fetch_array($resultado)){

    $Cad_id  =      $registro['Cad_id'];
    $Cad_nome  =    $registro['Cad_nome'];
    $Cad_endereco  = $registro['Cad_endereco'];
    $Cad_bairro  =    $registro['Cad_bairro'];
    $Cad_cidade  =  $registro['Cad_cidade'];
    $Cad_estado =   $registro['Cad_estado'];
    $Cad_cep  =     $registro['Cad_cep'];

    echo"<tr>";
    echo"<td>". $Cad_id."</Td>";
    echo"<td>". $Cad_nome."</Td>";
    echo"<td>". $Cad_endereco."</Td>";
    echo"<td>". $Cad_bairro."</Td>";
    echo"<td>".  $Cad_cidade ."</Td>";
    echo"<td>".  $Cad_estado."</Td>";
    echo"<td>". $Cad_cep ."</Td>";
    echo"</tr>";
    }



mysqli_close($conn);
echo"</table>";
?>
</body>
</html>