<?php

//$dir ="img/imagens/";
// recebendo o arquivo multipart
$file = $_FILES["arquivo"];
$teste1 = $file["tmp_name"];
$teste2 = $file["name"];
echo $teste1;
echo "<br>";
echo $teste2;
echo "<br>";
//Move o arquivo da pasta temporaria de upload para a pasta de 
if(move_uploaded_file($file["tmp_name"],"teste_selecionararquivo2/".$file["name"])){
    echo "Arquivo enviado com sucesso!";
}
else{
    echo "Erro arquivo nao pode ser envidado";
}          