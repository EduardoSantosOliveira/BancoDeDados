<!DOCTYPE html>
<html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <title>cadastro candidato</title>
                <link rel="stylesheet" href="votacao.css">
            </head>
            </body>
</html>
<h1>Resultado do cadastro: </h1>

<?php

$servername = "localhost";
$database = "teste_selectaarq";
$username = "root";
$password = "";
$cand_nome = $_POST['NOME'];
$cand_numero = $_POST['NUMERO'];
$cand_foto = $_FILES['IMAGEM'];
$nomeFoto = $cand_foto["name"];
$tipoimg = $cand_foto['type'];
$imgtamanho = $cand_foto['size'];

echo $imgtamanho;
echo $tipoimg;

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);


//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

if($imgtamanho < 10000 ){
    if($tipoimg == 'image/jpeg' || $tipoimg == 'image/png'){


if(move_uploaded_file($cand_foto["tmp_name"], $cand_foto["name"])){
    echo "Arquivo enviado com sucesso!";
}

else{
    echo "<br>";
    echo "Erro arquivo nao pode ser envidado";
    echo "<br>";
    echo "Por favor envie arquivos PNG, JPEG, JPG";
}        
  

//echo "conectado com suscesso";

//inserir atributos
$sql = " INSERT INTO  candidato (
                                        cand_id, 
                                        cand_nome, 
                                        cand_numero, 
                                        cand_foto ) 
                                        
                    VALUES (
                            '',
                            '$cand_nome',
                            '$cand_numero',
                            '$nomeFoto' )";


if(mysqli_query($conn, $sql)){
    //echo "<br>registro gravado com sucesso";

}
        else{
            echo "error: ".$sql. "<br>". mysqli_error($conn);

        }
    
    
mysqli_close($conn);
    }  
    
    else{
        echo "<br>";
        echo "Erro arquivo nao pode ser envidado";
        echo "<br>";
        echo "Por favor envie arquivos menores que 10000 pixels";
        echo "<br>";
        echo "Por favor envie arquivos PNG, JPEG, JPG";
    } 
}else{
    echo "<br>";
        echo "Erro arquivo nao pode ser envidado";
        echo "<br>";
        echo "Por favor envie arquivos menores que 10000 pixels";
        echo "<br>";
        echo "Por favor envie arquivos PNG, JPEG, JPG";
}



?>



<body> <html> <head>

<title>Resultado da pesquisa:</title>
    
</head> </body> 

<table border="1" style='width:50%'>
<tr> <th>ID</th> <th>NOME</th>  
<th>NUMERO</th> <th>FOTO</th></tr>

<?php

$servername = "localhost";
$database = "teste_selectaarq";
$username = "root";
$password = "";


$Campo = ["cand_id", "cand_nome","cand_numero","cand_foto"];
$i = 0;
$sequencia = "";
$comando = "";


//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

$sql = "SELECT * FROM candidato"; // where $comando";
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while($registro = mysqli_fetch_array($resultado)){

    $cand_id =      $registro['cand_id'];
    $cand_nome  =    $registro['cand_nome'];
    $cand_numero  = $registro['cand_numero'];
    $cand_foto  = $registro['cand_foto'];

    echo"<tr>";
    echo"<td>". $cand_id."</Td>";
    echo"<td>".  $cand_nome."</Td>";
    echo"<td>". $cand_numero."</Td>";
    echo"<td>"."<img src='$cand_foto' height='70px' width='70px' >"."</Td>"; 
    echo"</tr>";
    }



mysqli_close($conn);
echo"</table>";
?>
</body>
</html>