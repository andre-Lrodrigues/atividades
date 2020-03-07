        <?php
            if($_SESSION["ordem"] == 0){
                echo '<h3>Ainda não há jogadores.</h3>
                      <form method="post" action="instanciarJogadores.php">
                        <label>Insira o nome do jogador 1 (X):<br />
                            <input type="text" name="nome" required />
                        </label><br />
                        <input type="submit" value="Novo Jogador" />
                      </form>';
            }
            else{
                echo '<form method="post" action="instanciarJogadores.php"><br /><br /><br />
                        <label>Insira o nome do jogador 2 (O):<br />
                            <input type="text" name="nome" required />
                        </label><br />
                        <input type="submit" value="INICIAR" />
                      </form>';
            }
        ?>
        
    </body>
</html>