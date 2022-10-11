<!DOCTYPE html>
<html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <title>VOTO GRAVAR</title>
                <link rel="stylesheet" href="votacao.css">
            </head>
            </body>
</html>
<h1>CONFIRMA VOTO: </h1>
<table border="1" style='width:50%'>
<tr> <th>ID DO VOTO</th> <th>NUMERO DO CANDIDATO VOTADO</th> 
</tr>
<?php

$servername = "localhost";
$database = "teste_selectaarq";
$username = "root";
$password = "";
$numero_cand = $_POST["CONFIRMAR"];
// echo $numero_cand;
//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

//echo "conectado com suscesso";

//inserir atributos
$sql = " INSERT INTO  votacao (
                                        idvotacao, 
                                        numero_cand ) 
                                        
                    VALUES (
                            '',
                            '$numero_cand' )";


if(mysqli_query($conn, $sql)){
    //echo "<br>registro gravado com sucesso";

}
else{
    echo "error: ".$sql. "<br>". mysqli_error($conn);

}


mysqli_close($conn);
?>

<?php

$servername = "localhost";
$database = "teste_selectaarq";
$username = "root";
$password = "";
$numero_cand = $_POST["CONFIRMAR"];
// echo $numero_cand;
//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

$sql = "SELECT * FROM votacao "; 
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while($registro = mysqli_fetch_array($resultado)){

    $idvotacao  =      $registro['idvotacao'];
    $numero_cand  =    $registro['numero_cand'];

    echo"<tr>";
    echo"<td>".$idvotacao."</Td>";
    echo"<td>".$numero_cand."</Td>";
    echo"</tr>";
    }
   
mysqli_close($conn);
echo"</table>";
?>