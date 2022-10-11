<!DOCTYPE html>
<html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <title>Delete e Consulta de carro:</title>
                <link rel="stylesheet" href="carro.css">
            </head>
            </body>
</html>

<?php

$servername = "localhost";
$database = "atividade_carro";
$username = "root";
$password = "";
$Id = $_POST['ID'];

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

//echo "conectado com suscesso";

//deletar atributos
$sql = " DELETE FROM  carro where idcarro = $Id";
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

if(mysqli_query($conn, $sql)){
    echo "<br> DELETADO com sucesso";

}
else{
    echo "error: ".$sql. "<br>". mysqli_error($conn);

}


mysqli_close($conn);
?>

<body> <html> <head>

<title>Resultado da pesquisa:</title>
    
</head> </body> 

<h1>Resultado do delete:</h1>
<table border="1" style='width:50%'>
<tr> <th>ID</th> <th>Placa</th>  
<th>Modelo</th> <th>Chassi</th>
<th>Cor</th> </tr>

<?php

$servername = "localhost";
$database = "atividade_carro";
$username = "root";
$password = "";


$Campo = ["idcarro", "car_placa","car_modelo","car_chassi", "car_cor"];
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


$sql = "SELECT * FROM carro"; // where $comando";
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while($registro = mysqli_fetch_array($resultado)){

    $idcarro  =      $registro['idcarro'];
    $car_placa  =    $registro['car_placa'];
    $car_modelo  = $registro['car_modelo'];
    $car_chassi  = $registro['car_chassi'];
    $car_cor  =    $registro['car_cor'];

    echo"<tr>";
    echo"<td>". $idcarro."</Td>";
    echo"<td>".  $car_placa."</Td>";
    echo"<td>". $car_modelo."</Td>";
    echo"<td>".  $car_chassi."</Td>";
    echo"<td>".  $car_cor ."</Td>";
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