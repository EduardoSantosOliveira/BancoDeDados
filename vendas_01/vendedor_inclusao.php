<!DOCTYPE html>
<html lang="pt-br">

            <head>
                <meta charset="UTF-8">
                <title>cadastro vendedor</title>
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
$vend_nome = $_POST['NOME'];
$vend_endereco = $_POST['ENDERECO'];
$vend_cpf = $_POST['CPF'];
$vend_rg = $_POST['RG'];
$vend_horario = $_POST['HORARIO'];
$vend_nascimento = $_POST['NASCISMENTO'];
$vend_telefone = $_POST['TELEFONE'];

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

//echo "conectado com suscesso";

//inserir atributos
$sql = " INSERT INTO  cadastro_de_vendedores (
                                        idcad_vend, 
                                        vend_nome,
                                        vend_endereco, 
                                        vend_cpf, 
                                        vend_rg, 
                                        vend_horario,
                                        vend_nascimento,
                                        vend_telefone ) 
                                        
                    VALUES (
                            '',
                            '$vend_nome',
                            '$vend_endereco',
                            '$vend_cpf',
                            '$vend_rg',
                            '$vend_horario',
                            '$vend_nascimento',
                            '$vend_telefone' )";


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
<tr> <th>ID</th> <th>NOME</th> <th>ENDERECO</th> <th>CPF</th> <th>RG</th> <th>HORARIO</th> <th>NASCIMENTO</th> <th>TELEFONE</th> </tr>

<?php

$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";


$Campo = ["idcad_vend", "vend_nome","vend_endereco","vend_cpf", "vend_rg","vend_horario","vend_nascimento","vend_telefone" ];
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


$sql = "SELECT * FROM cadastro_de_vendedores"; // where $comando";
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while ($registro = mysqli_fetch_array($resultado))
 {
   $idcad_vend       = $registro['idcad_vend'];
   $vend_nome    = $registro['vend_nome'];
   $vend_endereco    = $registro['vend_endereco'];
   $vend_cpf = $registro['vend_cpf'];
   $vend_rg  = $registro['vend_rg'];
   $vend_horario   = $registro['vend_horario'];
   $vend_nascimento   = $registro['vend_nascimento'];
   $vend_telefone   = $registro['vend_telefone'];
 
   echo "<tr>";
   echo "<td>".$idcad_vend."</td>";
   echo "<td>".$vend_nome."</td>";
   echo "<td>".$vend_endereco."</td>";
   echo "<td>".$vend_cpf."</td>";
   echo "<td>".$vend_rg."</td>";
   echo "<td>".$vend_horario."</td>";
   echo "<td>".$vend_nascimento."</td>";
   echo "<td>".$vend_telefone."</td>";
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
        <form method="post" action="vendedor_home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>