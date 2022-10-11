<html> 
 <link rel="stylesheet" href="game.css">
 <table border="1" style='width:50%'>
 <tr> <th>ID</th> <th>NOME DO JOGO</th> <th>PRECO DO JOGO</th> <th>DESENVOLVEDOR DO GAME</th> <th>PLATAFORMA</th> <th>GENERO</th> </tr>

        <?php
            $servername = "localhost";
            $database = "atividade_quatro";
            $username = "root";
            $password = "";

            // Cria Conexão
            $conn = mysqli_connect($servername, $username, 
                                $password, $database);
            // Verificar Conexão
            if (!$conn) {
                die("falha na conexão: " . mysqli_connect_error());
            }

                echo "<br>Conectado com sucesso<br>";

            $sql = "SELECT * FROM games";     
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

            // loop para ler todos os registros
            while ($registro = mysqli_fetch_array($resultado))
            {
                $idGames       = $registro['idGames'];
                $nome_game     = $registro['nome_game'];
                $preco_game = $registro['preco_game'];
                $desenvolvedor_game  = $registro['desenvolvedor_game'];
                $plataforma_game   = $registro['plataforma_game'];
                $genero_game   = $registro['genero_game'];
                
                echo "<tr>";
                echo "<td>".$idGames."</td>";
                echo "<td>".$nome_game."</td>";
                echo "<td>".$preco_game."</td>";
                echo "<td>".$desenvolvedor_game."</td>";
                echo "<td>".$plataforma_game."</td>";
                echo "<td>".$genero_game."</td>";
                echo "<td>
                        <form action='salvaexclusao.php' method='post'>
                        <center> 
                        <input type='hidden' name='dado' value=".$idGames.">
                        <input type=submit value='Deletar' ></form>";
                    echo"</tr>";
            }
            echo"</table>";
            mysqli_close($conn);
        ?>
</html>

