        <?php
            include "classes.php";
            include "cabecalho.php";
            echo '<br /><h1>Jogo da Velha</h1><br />';
            if(empty($_SESSION["comecar"])){
                $_SESSION["comecar"] = 0;
            }
            include "formJogador.php";
        ?>
    </body>
</html>