<?php
$Colunas = $_POST['COLUNAS1'];
$Linhas = $_POST['LINHAS1'];

echo "colunas: ", $Colunas, "<br>";
echo "linhas: ", $Linhas, "<br><br>";

echo"<a href='http://localhost/aula/index.html'>clique aqui para voltar a tabela</a><br>";

echo"<table border 100><br>";

if($Colunas > 50 || $Linhas > 50 && $Colunas <= 0 || $Linhas <= 0 ){

    echo"Nao pode ser maior que 50 e o valor nao pode ser negativo ou 0 <br>";
    
}

else {

for($a = 1; $a <= $Linhas; $a++){
   echo"<tr>";

    for($b = 1; $b <= $Colunas; $b++){
        echo"<td> [".$a."-".$b."] </td>";


    }
    echo"</tr>";
    }
}

echo"</table>";

?>