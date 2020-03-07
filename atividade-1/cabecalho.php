<?php
    // classe jogador
    class Jogadores{
        private $nome;
        private $marcador;

        public function __construct($n, $m){
            $this->nome = $n;
            $this->marcador = $m;
        }

        public function get_nome(){
            return($this->nome);
        }
        public function get_marcador(){
            return($this->marcador);
        }
    }

    // classe tabuleiro
    class Tabuleiro{
        private $matriz;
    }

    session_start();
?>

<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Tic Tac Toe</title>
        <style>
            input{margin: 5px; width:150px;}
        </style>
    </head>
    <body>
        <a href="reset.php">Novo Jogo</a>
        <hr />