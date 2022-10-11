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
$prod_nome = $_POST['NOME'];
$prod_preco = $_POST['PRECO'];
$prod_quantidade = $_POST['QUANTIDADE'];
$prod_peso = $_POST['PESO'];
$prod_categoria = $_POST['CATEGORIA'];

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

//echo "conectado com suscesso";

//inserir atributos
$sql = " INSERT INTO  cadastro_de_produto (
                                        idcad_prod, 
                                        prod_nome,
                                        prod_preco, 
                                        prod_quantidade, 
                                        prod_peso, 
                                        prod_categoria ) 
                                        
                    VALUES (
                            '',
                            '$prod_nome',
                            '$prod_preco',
                            '$prod_quantidade',
                            '$prod_peso',
                            '$prod_categoria' )";


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
<tr> <th>ID</th> <th>NOME DO PRODUTO</th> <th>PRECO</th> <th>QUANTIDADE</th> <th>PESO</th> <th>CATEGORIA</th> </tr>

<?php

$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";


$campo=["idcad_prod", "prod_nome", "prod_preco", 
        "prod_quantidade", "prod_peso", "prod_categoria" ];
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


$sql = "SELECT * FROM cadastro_de_produto"; // where $comando";
$resultado =  mysqli_query($conn,$sql) or die("Erro ao retornar");

//loop para ler todos os registros
while ($registro = mysqli_fetch_array($resultado))
 {
    $idcad_prod       = $registro['idcad_prod'];
    $prod_nome     = $registro['prod_nome'];
    $prod_preco = $registro['prod_preco'];
    $prod_quantidade  = $registro['prod_quantidade'];
    $prod_peso   = $registro['prod_peso'];
    $prod_categoria   = $registro['prod_categoria'];
  
    echo "<tr>";
    echo "<td>".$idcad_prod."</td>";
    echo "<td>".$prod_nome."</td>";
    echo "<td>".$prod_preco."</td>";
    echo "<td>".$prod_quantidade."</td>";
    echo "<td>".$prod_peso."</td>";
    echo "<td>".$prod_categoria."</td>";
    echo "</tr>";
}

mysqli_close($conn);
echo"</table>";
?>
</body>
</html>

<html>
    <body>
        <br><br>
        <form method="post" action="produto_home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>