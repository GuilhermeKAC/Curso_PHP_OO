<?php

    require_once 'Animal.php';

    class Mamifero extends Animal {
        
        // Atributos

        private $corpelo;

        // Métodos Abstratos

        public function locomover() {
            echo "<p>Correndo</p>";
        }
        public function alimentar() {
            echo "<p>Mamando</p>";
        }
        public function emitirSom() {
            echo "<p>Som de mamifero</p>";
        }

        // Métodos especiais

        public function getCorpelo() {
            return $this->corpelo;
        }
        public function setCorpelo($corpelo) {
            $this->corpelo = $corpelo;
        }

    }

?>