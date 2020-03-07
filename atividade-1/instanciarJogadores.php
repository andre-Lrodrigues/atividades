<?php
    include "classes.php";
    session_start();

    if($_SESSION["ordem"] == 0){
        $j = new Jogador($_POST["nome"], "X"); 
        $_SESSION["jogadores"][] = $j;
        $_SESSION["ordem"] = 1;
        header("Location: index.php");
    }
    else{
        $j = new Jogador($_POST["nome"], "O");
        $_SESSION["jogadores"][] = $j;
        $_SESSION["ordem"] = 0;
        header("Location: jogar.php");
    }
?>