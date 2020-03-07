<?php
    // classe jogador
    class Jogador{
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
?>