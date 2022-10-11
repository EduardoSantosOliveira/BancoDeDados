<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">

 <table border="1" style='width:50%'>
 <tr> <th>ID</th> <th>NOME DO PRODUTO</th> <th>PRECO</th> <th>QUANTIDADE</th> <th>PESO</th> <th>CATEGORIA</th> </tr>

<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";

$campo=["idcad_prod", "prod_nome", "prod_preco", 
        "prod_quantidade", "prod_peso", "prod_categoria" ];
$i=0;
$sequencia="";
$comando="";

// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
 
echo "<br>Conectado com sucesso<br>";
 
// Verifica escolha de campos
if(isset($_POST["dado"]))
{    
    // Faz loop para os dados
    foreach($_POST["dado"] as $dado)
    {
        if ( $dado <> "")
        {
            if ($sequencia == "")
                $sequencia=1;
            else
                $comando = $comando . " and ";
                      
            $comando = $comando . $campo[$i] ."="."'"
            .$dado."' ";
            echo "$comando <br>"; 
        }
        $i++;
    }
     
     
}
else
{
    echo "nenhum campo selecionado";
   
}


if ($comando <> "")
     $sql = "SELECT * FROM cadastro_de_produto where $comando";   
else
    $sql = "SELECT * FROM cadastro_de_produto";     

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
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
   echo "<td>
         <form action='produto_exclusao.php' method='post'>
         <center> 
         <input type='hidden' name='dado' value=".$idcad_prod.">
         <input type=submit value='Deletar' ></form>";

    echo "<td>
            <form action='produto_alteracao.php' method='post'>
            <center> 
            <input type='hidden' name='dado' value=".$idcad_prod.">
            <input type=submit value='Alterar' ></form>";
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
        <form method="post" action="produto_home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>