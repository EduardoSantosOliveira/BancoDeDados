<?php


//EXERCICIO 1:
/*echo(45 == 45.0);echo("<br>");  //RESULTADO: 1
echo(45 === 45.0);echo("<br>");  //RESULTADO: VAZIO
echo(5 < 5);echo("<br>");  //RESULTADO: VAZIO
echo(5 <= 5);echo("<br>");  //RESULTADO: 1
echo(6 > 6);echo("<br>");  //RESULTADO: VAZIO
echo(6 >= 6);echo("<br>");  //RESULTADO: 1
echo(1 < 3 && 3 < 1);echo("<br>"); //RESULTADO: VAZIO
echo(1 < 3 && 3 > 1);echo("<br>"); //RESULTADO: 1
echo(1 < 3 || 3 < 1);echo("<br>"); //RESULTADO: 1*/





//EXERCICIO 2:
/*$valor1 = 150220.888;
$valor2 = number_format($valor1,1);
$valor3 = number_format($valor1,2,',','.');

echo($valor1.'<br>');
echo($valor2.'<br>');
echo($valor3.'<br>');

print"<br>".$valor1."->".number_format($valor1,2,'.',',')."<br>";*/



//EXERCICIO 3:
/*$file = fopen('arquivo.txt','w'); //ecrevendo em um arquivo
fwrite($file,'escrevendo no arquivo'."<br>");
fclose($file);
$file = fopen('arquivo.txt','a+'); //a+ coloca o ponteiro no final do arquivo
fwrite($file,'teste numero = 1');
fclose($file);*/



//EXERCICIO 4:
//Lendo em um arquivo
$nomearquivo = 'arquivo.txt';
$file = fopen($nomearquivo,'r');
$buffer = fread($file,filesize($nomearquivo));
fclose($file);
echo($buffer.'<br>');

?>
