<?php

$Numero = $_POST['NUMERO1'];
$Escolha = $_POST['ESCOLHA'];


if ($Numero > "5" || $Numero < "1")
    {
       
    echo "<h2>O numero selecionado nao pode ser enviado</h2>";
    
    }
else
{
      
if($Escolha == 'uma' && $Numero == "1"){

    for($a = 1; $a <= 1; $a ++){
        echo"<table border 100><br>";  
        echo"<tr>";
       

        for($b = 1; $b <= 1; $b++ ){
            echo"<th>numero: 1</th>";
            echo"<td>descricao do produto: Facas</td>";
            echo"<td>QTD Facas = 10</td>";

        }
        echo"</tr>";
        echo"</table>";
        

    }
}

if($Escolha == 'uma' && $Numero == "2"){

    for($a = 1; $a <= 1; $a ++){
        echo"<table border 100><br>";  
        echo"<tr>";
       

        for($b = 1; $b <= 1; $b++ ){
            echo"<th>Numero: 2</th>";
            echo"<td>Descricao do produto: Colher</td>";
            echo"<td>QTD Colheres = 20</td>";

        }
        echo"</tr>";
        echo"</table>";
        

    }
}

if($Escolha == 'uma' && $Numero == "3"){

    for($a = 1; $a <= 1; $a ++){
        echo"<table border 100><br>";  
        echo"<tr>";
       

        for($b = 1; $b <= 1; $b++ ){
            echo"<th>Numero: 3</th>";
            echo"<td>Descricao do produto: Pratos</td>";
            echo"<td>QTD Pratos = 5</td>";

        }
        echo"</tr>";
        echo"</table>";
        

    }
}

if($Escolha == 'uma' && $Numero == "4"){

    for($a = 1; $a <= 1; $a ++){
        echo"<table border 100><br>";  
        echo"<tr>";
       

        for($b = 1; $b <= 1; $b++ ){
            echo"<th>Numero: 4</th>";
            echo"<td>Descricao do produto: Copo</td>";
            echo"<td>QTD Copos 30</td>";


        }
        echo"</tr>";
        echo"</table>";
        

    }
}

if($Escolha == 'uma' && $Numero == "5"){

    for($a = 1; $a <= 1; $a ++){
        echo"<table border 100><br>";  
        echo"<tr>";
       

        for($b = 1; $b <= 1; $b++ ){
            echo"<th>Numero: 5</th>";
            echo"<td>Descricao do produto: Arroz</td>";
            echo"<td>QTD Arroz = 1</td>";
        }
        echo"</tr>";
        echo"</table>";
        

    }
}

if($Escolha == 'Todas' && $Numero <= '5'){

    for($a = 1; $a <= 1; $a ++){
        echo"<table border 100><br>";  
        echo"<tr>";
       

        for($b = 1; $b <= 1; $b++ ){

            echo"<th>numero: 1</th>";
            echo"<td>descricao do produto: Facas</td>";
            echo"<td>QTD Facas = 10</td>";

            echo"<th>Numero: 2</th>";
            echo"<td>Descricao do produto: Colher</td>";
            echo"<td>QTD Colheres = 20</td>";

            echo"<th>Numero: 3</th>";
            echo"<td>Descricao do produto: Pratos</td>";
            echo"<td>QTD Pratos = 5</td>";

            echo"<th>Numero: 4</th>";
            echo"<td>Descricao do produto: Copo</td>";
            echo"<td>QTD Copos 30</td>";

            echo"<th>Numero: 5</th>";
            echo"<td>Descricao do produto: Arroz</td>";
            echo"<td>QTD Arroz = 1</td>";
            

        }
        echo"</tr>";
        echo"</table>";
        

    }
}


}

?>