<body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">

 <table border="1" style='width:50%'>
 <tr> <th>ID</th> <th>NOME</th> <th>ENDERECO</th> <th>CPF</th> <th>RG</th> <th>NASCIMENTO</th> <th>ESTADO</th> <th>TELEFONE</th> </tr>

<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";

$campo=["idcad_cli", "cli_nome", "cli_endereco", 
        "cli_cpf", "cli_rg", "cli_nascimento", "cli_estado", "cli_telefone"];
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
     $sql = "SELECT * FROM cadastro_de_clientes where $comando";   
else
    $sql = "SELECT * FROM cadastro_de_clientes";     

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
 while ($registro = mysqli_fetch_array($resultado))
 {
   $idcad_cli       = $registro['idcad_cli'];
   $cli_nome     = $registro['cli_nome'];
   $cli_endereco = $registro['cli_endereco'];
   $cli_cpf  = $registro['cli_cpf'];
   $cli_rg   = $registro['cli_rg'];
   $cli_nascimento   = $registro['cli_nascimento'];
   $cli_estado   = $registro['cli_estado'];
   $cli_telefone   = $registro['cli_telefone'];
 
   echo "<tr>";
   echo "<td>".$idcad_cli."</td>";
   echo "<td>".$cli_nome."</td>";
   echo "<td>".$cli_endereco."</td>";
   echo "<td>".$cli_cpf."</td>";
   echo "<td>".$cli_rg."</td>";
   echo "<td>".$cli_nascimento."</td>";
   echo "<td>".$cli_estado."</td>";
   echo "<td>".$cli_telefone."</td>";
   echo "<td>
         <form action='cliente_exclusao.php' method='post'>
         <center> 
         <input type='hidden' name='dado' value=".$idcad_cli.">
         <input type=submit value='Deletar' ></form>";

    echo "<td>
            <form action='cliente_alteracao.php' method='post'>
            <center> 
            <input type='hidden' name='dado' value=".$idcad_cli.">
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
        <form method="post" action="cliente_home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>