<?php
$Numero = $_POST['NUMERO1'];
$Escolha = $_POST['ESCOLHA'];


if($Escolha == 'sim'){

  
   for($a = 1; $a <= 10; $a++ ){ 
    echo"<table border 100><br>";  
    echo"<tr>";

      for($b = 1; $b <= 10; $b++){
        echo"<td>".$a."X".$b." = ".$a * $b."</td>";
      
      }
      echo"</tr>";
      echo"</table>";
}


}
else{

    for($a = 1; $a <= 10; $a++ ){
        echo"<table border 100><br>";  
        echo"<tr>";
        echo"<td> [".$Numero."X".$a."] = ".$Numero*$a."  </td>";
        echo"</tr>";
        echo"</table>";
   }
}

?>