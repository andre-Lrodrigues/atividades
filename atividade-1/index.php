        <?php
            include "classes.php";
            include "cabecalho.php";
            echo '<br /><h1>Jogo da Velha</h1><br />';
            if(empty($_SESSION["ordem"])){
                $_SESSION["ordem"] = 0;
            }
            include "formJogador.php";
        ?>
    </body>
</html>