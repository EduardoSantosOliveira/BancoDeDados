<?php

$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";
$Nome = $_POST['NOME'];
$Endereco = $_POST['ENDERECO'];
$Bairro = $_POST['BAIRRO'];
$Cidade = $_POST['CIDADE'];
$Estado = $_POST['ESTADO'];
$Cep = $_POST['CEP'];

//cria conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//verifica conexao
if(!$conn){
    die("falha de conexao: ". mysqli_connect_error ());

}

echo "conectado com suscesso";

$sql = " INSERT INTO  banco_de_dados (
                                        Cad_id, 
                                        Cad_nome, 
                                        Cad_endereco, 
                                        cad_bairro, 
                                        Cad_cidade, 
                                        Cad_estado, 
                                        Cad_cep ) 
                    VALUE (
                            '13',
                            '$Nome',
                            '$Endereco',
                            '$Bairro',
                            '$Cidade',
                            '$Estado',
                            '$Cep')";


if(mysqli_query($conn, $sql)){
    echo "<br>registro gravado com sucesso";

}
else{
    echo "error: ".$sql. "<br>". mysqli_error($conn);

}
mysqli_close($conn);

?>
