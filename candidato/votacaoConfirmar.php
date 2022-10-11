<body> <html> <head>

<title>CONFIRMAR: </title>
    
</head> </body> 
<link rel="stylesheet" href="votacao.css">
<table border="1" style='width:50%'>
<tr> <th>ID</th> <th>Nome do candidato</th>  
<th>numero do candidato</th> <th>foto do candidato</th>
</tr>

<?php

$servername = "localhost";
$database = "teste_selectaarq";
$username = "root";
$password = "";
$Campo = ["cand_numero"];
$i = 0;
$sequencia = "";
$comando = "";


//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}


// echo "conectado com suscesso";

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
            // echo"-  " . $Campo[$i] . "---". $dado. "<br>";
        }
        $i++;
    }
    // echo $comando;
}
else{
     echo "nenhum campo selecionado";
}


$sql = "SELECT * FROM candidato where $comando "; 
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while($registro = mysqli_fetch_array($resultado)){

    $cand_id  =      $registro['cand_id'];
    $cand_nome  =    $registro['cand_nome'];
    $cand_numero  = $registro['cand_numero'];
    $cand_foto  = $registro['cand_foto'];

    echo"<tr>";
    echo"<td>". $cand_id."</Td>";
    echo"<td>". $cand_nome."</Td>";
    echo"<td>". $cand_numero."</Td>";
    echo"<td>"."<img src='$cand_foto' height='70px' width='70px' >"."</Td>";
    echo "<td>
         <form action='VotoGravar.php' method='post'>
         <center> 
         <input type='hidden' name='CONFIRMAR' value=".$cand_numero.">
         <input type=submit value='CONFIRMAR' ></form>";
    echo"</tr>";
    }
   
mysqli_close($conn);
echo"</table>";
?>

</body>
</html>
