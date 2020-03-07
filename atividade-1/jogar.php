<?php
    include "classes.php";
    include "cabecalho.php";

    echo '<p>Jogada</p>';
   // foreach($_SESSION["jogadores"] as $i=>$j){

        echo "<p>".$_SESSION["jogadores"][$_SESSION["ordem"]]->get_nome().":</p>
        <form action='jogar.php' method='post'>
            <input type='number' name='linha' required min='0' max='2' placeholder='Linha' /><br />
            <input type='number' name='coluna' required min='0' max='2' placeholder='Coluna' /><br />
            
            <input type='submit' value='Jogar' />
        </form>";
        if($_SESSION["ordem"] == 0){
            $_SESSION["ordem"] = 1;
        }
        elseif($_SESSION["ordem"] == 1){
            $_SESSION["ordem"] = 0;
        }
        //break;
    //}
?>
