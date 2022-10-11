body> <html> <head>
 <title>Resultado da pesquisa</title>
 </head> </body>
 <link rel="stylesheet" href="home.css">

 <table border="1" style='width:50%'>
 <tr> <th>ID</th> <th>NOME</th> <th>ENDERECO</th> <th>CPF</th> <th>RG</th> <th>HORARIO</th> <th>NASCIMENTO</th> <th>TELEFONE</th> </tr>

<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";

$Campo = ["idcad_vend", "vend_nome","vend_endereco","vend_cpf", "vend_rg","vend_horario","vend_nascimento","vend_telefone" ];
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
     $sql = "SELECT * FROM cadastro_de_vendedores where $comando";   
else
    $sql = "SELECT * FROM cadastro_de_vendedores";     

$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 
 // loop para ler todos os registros
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
   echo "<td>
         <form action='vendedor_exclusao.php' method='post'>
         <center> 
         <input type='hidden' name='dado' value=".$idcad_vend.">
         <input type=submit value='Deletar' ></form>";

    echo "<td>
            <form action='vendedor_alteracao.php' method='post'>
            <center> 
            <input type='hidden' name='dado' value=".$idcad_vend.">
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
        <form method="post" action="vendedor_home.html">
        <input type="submit" value="Voltar uma pagina">    
    </body>
</html>