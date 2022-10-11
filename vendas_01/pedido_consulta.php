<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">

 <table border="1" style='width:50%'>
 <tr> <th>ID</th> <th>ID DO CLINTE</th> <th>ID DO VENDEDOR</th> <th>ID DO PRODUTO</th> <th>TRANSPORTADORA</th> <th>VALOR DO FRETE</th> <th>ENDERECO DA ENTREGA</th> </tr>

<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";

$campo = ["idcad_ped", "cli_nomes", "vend_nomes","idcad_prod", "ped_transportadora", 
        "ped_valorFrete", "ped_endereco" ];
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
    $sql = "SELECT cli_nome, vend_nome, idcad_ped, ped_transportadora, ped_valorFrete, ped_endereco, ped_cli, ped_vend 
    FROM vendas_01.cadastro_de_clientes, vendas_01.cadastro_de_vendedores, vendas_01.cadastro_de_pedido 
    WHERE $comando
    ORDER BY idcad_cli ASC ";

else
    $sql = "SELECT cli_nome, vend_nome, idcad_ped, ped_transportadora, ped_valorFrete, ped_endereco, ped_cli, ped_vend 
    FROM vendas_01.cadastro_de_clientes, vendas_01.cadastro_de_vendedores, vendas_01.cadastro_de_pedido 
    WHERE ped_cli = idcad_cli AND ped_vend = idcad_vend 
    ORDER BY idcad_cli ASC ";     


$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
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
   echo "<td>
         <form action='pedido_exclusao.php' method='post'>
         <center> 
         <input type='hidden' name='dado' value=".$idcad_ped.">
         <input type=submit value='Deletar' ></form>";

    echo "<td>
            <form action='pedido_alteracao.php' method='post'>
            <center> 
            <input type='hidden' name='dado' value=".$idcad_ped.">
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
        <form method="post" action="pedido_home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>