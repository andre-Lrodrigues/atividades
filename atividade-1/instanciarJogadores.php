        <?php
            include "cabecalho.php";

            $j = new Jogadores(); 

            if($_SESSION["comecar"] == 0){
                $j->nome = $_POST["nome"];
                $j->marcador = 'X';

                $_SESSION["jogadores"][] = $j;
                $_SESSION["comecar"] = 1;
                header("Location: formJogador.php");
            }
            else{
                $j->nome = $_POST["nome"];
                $j->marcador = 'O';
                $_SESSION["jogadores"][] = $j;
                header("Location: jogar.php");
            }
        ?>
    </body>
</html>