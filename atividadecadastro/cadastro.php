<?php

$Nome1 = $_POST['1NOME'];
$Endereco1 = $_POST['1ENDERECO'];
$Bairro1 = $_POST['1BAIRRO'];
$Cidade1 = $_POST['1CIDADE'];
$Estado1 = $_POST['1ESTADO'];
$Cep1 = $_POST['1CEP'];

$Nome2 = $_POST['2NOME'];
$Endereco2 = $_POST['2ENDERECO'];
$Bairro2 = $_POST['2BAIRRO'];
$Cidade2 = $_POST['2CIDADE'];
$Estado2 = $_POST['2ESTADO'];
$Cep2 = $_POST['2CEP'];

$Nome3 = $_POST['3NOME'];
$Endereco3 = $_POST['3ENDERECO'];
$Bairro3 = $_POST['3BAIRRO'];
$Cidade3 = $_POST['3CIDADE'];
$Estado3 = $_POST['3ESTADO'];
$Cep3 = $_POST['3CEP'];

$Nome4 = $_POST['4NOME'];
$Endereco4 = $_POST['4ENDERECO'];
$Bairro4 = $_POST['4BAIRRO'];
$Cidade4 = $_POST['4CIDADE'];
$Estado4 = $_POST['4ESTADO'];
$Cep4 = $_POST['4CEP'];

$Nome5 = $_POST['5NOME'];
$Endereco5 = $_POST['5ENDERECO'];
$Bairro5 = $_POST['5BAIRRO'];
$Cidade5 = $_POST['5CIDADE'];
$Estado5 = $_POST['5ESTADO'];
$Cep5 = $_POST['5CEP'];

$Nome6 = $_POST['6NOME'];
$Endereco6 = $_POST['6ENDERECO'];
$Bairro6 = $_POST['6BAIRRO'];
$Cidade6 = $_POST['6CIDADE'];
$Estado6 = $_POST['6ESTADO'];
$Cep6 = $_POST['6CEP'];

$Nome7 = $_POST['1NOME'];
$Endereco7 = $_POST['1ENDERECO'];
$Bairro7 = $_POST['1BAIRRO'];
$Cidade7 = $_POST['1CIDADE'];
$Estado7 = $_POST['1ESTADO'];
$Cep7 = $_POST['1CEP'];

$Nome8 = $_POST['8NOME'];
$Endereco8 = $_POST['8ENDERECO'];
$Bairro8 = $_POST['8BAIRRO'];
$Cidade8 = $_POST['8CIDADE'];
$Estado8 = $_POST['8ESTADO'];
$Cep8 = $_POST['8CEP'];

$Nome9 = $_POST['9NOME'];
$Endereco9 = $_POST['9ENDERECO'];
$Bairro9 = $_POST['9BAIRRO'];
$Cidade9 = $_POST['9CIDADE'];
$Estado9 = $_POST['9ESTADO'];
$Cep9 = $_POST['9CEP'];

$Nome10 = $_POST['10NOME'];
$Endereco10 = $_POST['10ENDERECO'];
$Bairro10 = $_POST['10BAIRRO'];
$Cidade10 = $_POST['10CIDADE'];
$Estado10 = $_POST['10ESTADO'];
$Cep10 = $_POST['10CEP'];

echo "<table border='1' style='width:50%'>";
echo "<tr> <th>ID</th> <th>Nome</th>";  
echo "<th>Endereço</th> <th>Bairro</th> <th>Cidade</th>";
echo "<th>Estado</th> <th>Cep</th> </tr>";

echo"<tr>";
echo"<th> 1 </th>";
echo "<td>".$Nome1."</td>";
echo "<td>".$Endereco1."</td>";
echo "<td>".$Bairro1."</td>";
echo "<td>".$Cidade1."</td>";
echo "<td>".$Estado1."</td>";
echo "<td>".$Cep1."</td>";


echo"<tr>";
echo"<th> 2 </th>";
echo "<td>".$Nome2."</td>";
echo "<td>".$Endereco2."</td>";
echo "<td>".$Bairro2."</td>";
echo "<td>".$Cidade2."</td>";
echo "<td>".$Estado2."</td>";
echo "<td>".$Cep2."</td>";



echo"<tr>";
echo"<th> 3 </th>";
echo "<td>".$Nome3."</td>";
echo "<td>".$Endereco3."</td>";
echo "<td>".$Bairro3."</td>";
echo "<td>".$Cidade3."</td>";
echo "<td>".$Estado3."</td>";
echo "<td>".$Cep3."</td>";


echo"<tr>";
echo"<th> 4 </th>";
echo "<td>".$Nome4."</td>";
echo "<td>".$Endereco4."</td>";
echo "<td>".$Bairro4."</td>";
echo "<td>".$Cidade4."</td>";
echo "<td>".$Estado4."</td>";
echo "<td>".$Cep4."</td>";



echo"<tr>";
echo"<th> 5 </th>";
echo "<td>".$Nome5."</th>";
echo "<td>".$Endereco5."</td>";
echo "<td>".$Bairro5."</td>";
echo "<td>".$Cidade5."</td>";
echo "<td>".$Estado5."</td>";
echo "<td>".$Cep5."</td>";



echo"<tr>";
echo"<th> 6 </th>";
echo "<td>".$Nome6."</td>";
echo "<td>".$Endereco6."</td>";
echo "<td>".$Bairro6."</td>";
echo "<td>".$Cidade6."</td>";
echo "<td>".$Estado6."</td>";
echo "<td>".$Cep6."</td>";



echo"<tr>";
echo"<th> 7 </th>";
echo "<td>".$Nome7."</td>";
echo "<td>".$Endereco7."</td>";
echo "<td>".$Bairro7."</td>";
echo "<td>".$Cidade7."</td>";
echo "<td>".$Estado7."</td>";
echo "<td>".$Cep7."</td>";



echo"<tr>";
echo"<th> 8 </th>";
echo "<td>".$Nome8."</td>";
echo "<td>".$Endereco8."</td>";
echo "<td>".$Bairro8."</td>";
echo "<td>".$Cidade8."</td>";
echo "<td>".$Estado8."</td>";
echo "<td>".$Cep8."</td>";



echo"<tr>";
echo"<th> 9 </th>";
echo "<td>".$Nome9."</td>";
echo "<td>".$Endereco9."</td>";
echo "<td>".$Bairro9."</td>";
echo "<td>".$Cidade9."</td>";
echo "<td>".$Estado9."</td>";
echo "<td>".$Cep9."</td>";


echo"<tr>";
echo"<th> 10 </th>";
echo "<td>".$Nome10."</td>";
echo "<td>".$Endereco10."</td>";
echo "<td>".$Bairro10."</td>";
echo "<td>".$Cidade10."</td>";
echo "<td>".$Estado10."</td>";
echo "<td>".$Cep10."</td>";

echo"</tr>";
echo"</table>";



$file = fopen('cad_001.dat','w'); //ecrevendo em um arquivo
fwrite($file,'Nome:'.$Nome1." | ");
fwrite($file,'Endereco: '.$Endereco1." | ");
fwrite($file,'Bairro: '.$Bairro1." | ");
fwrite($file,'Cidade: '.$Cidade1." | ");
fwrite($file,'Estado: '.$Estado1." | ");
fwrite($file,'Cep: '.$Cep1." | ");

fwrite($file,'Nome:'.$Nome2." | ");
fwrite($file,'Endereco: '.$Endereco2." | ");
fwrite($file,'Bairro: '.$Bairro2." | ");
fwrite($file,'Cidade: '.$Cidade2." | ");
fwrite($file,'Estado: '.$Estado2." | ");
fwrite($file,'Cep: '.$Cep2." | ");

fwrite($file,'Nome:'.$Nome3." | ");
fwrite($file,'Endereco: '.$Endereco3." | ");
fwrite($file,'Bairro: '.$Bairro3." | ");
fwrite($file,'Cidade: '.$Cidade3." | ");
fwrite($file,'Estado: '.$Estado3." | ");
fwrite($file,'Cep: '.$Cep3." | ");

fwrite($file,'Nome:'.$Nome4." | ");
fwrite($file,'Endereco: '.$Endereco4." | ");
fwrite($file,'Bairro: '.$Bairro4." | ");
fwrite($file,'Cidade: '.$Cidade4." | ");
fwrite($file,'Estado: '.$Estado4." | ");
fwrite($file,'Cep: '.$Cep4." | ");

fwrite($file,'Nome:'.$Nome5." | ");
fwrite($file,'Endereco: '.$Endereco5." | ");
fwrite($file,'Bairro: '.$Bairro5." | ");
fwrite($file,'Cidade: '.$Cidade5." | ");
fwrite($file,'Estado: '.$Estado5." | ");
fwrite($file,'Cep: '.$Cep5." | ");

fwrite($file,'Nome:'.$Nome6." | ");
fwrite($file,'Endereco: '.$Endereco6." | ");
fwrite($file,'Bairro: '.$Bairro6." | ");
fwrite($file,'Cidade: '.$Cidade6." | ");
fwrite($file,'Estado: '.$Estado6." | ");
fwrite($file,'Cep: '.$Cep6." | ");

fwrite($file,'Nome:'.$Nome7." | ");
fwrite($file,'Endereco: '.$Endereco7." | ");
fwrite($file,'Bairro: '.$Bairro7." | ");
fwrite($file,'Cidade: '.$Cidade7." | ");
fwrite($file,'Estado: '.$Estado7." | ");
fwrite($file,'Cep: '.$Cep7." | ");

fwrite($file,'Nome:'.$Nome8." | ");
fwrite($file,'Endereco: '.$Endereco8." | ");
fwrite($file,'Bairro: '.$Bairro8." | ");
fwrite($file,'Cidade: '.$Cidade8." | ");
fwrite($file,'Estado: '.$Estado8." | ");
fwrite($file,'Cep: '.$Cep8." | ");

fwrite($file,'Nome:'.$Nome9." | ");
fwrite($file,'Endereco: '.$Endereco9." | ");
fwrite($file,'Bairro: '.$Bairro9." | ");
fwrite($file,'Cidade: '.$Cidade9." | ");
fwrite($file,'Estado: '.$Estado9." | ");
fwrite($file,'Cep: '.$Cep9." | ");

fwrite($file,'Nome:'.$Nome10." | ");
fwrite($file,'Endereco: '.$Endereco10." | ");
fwrite($file,'Bairro: '.$Bairro10." | ");
fwrite($file,'Cidade: '.$Cidade10." | ");
fwrite($file,'Estado: '.$Estado10." | ");
fwrite($file,'Cep: '.$Cep10." | ");

fclose($file);
$file = fopen('cad_001.dat','a+'); //a+ coloca o ponteiro no final do arquivo
fclose($file);

?>