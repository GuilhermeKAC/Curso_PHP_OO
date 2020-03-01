<?php

    require_once 'Animal.php';

    class Mamifero extends Animal {

        // Atributos

        protected $corPelo;

        // Métodos

        public function emitirSom() {
            echo "<p>Som de Mamifero</p>";
        }

        // Métodos Especiais

        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPelo($corPelo) {
            $this->corPelo = $corPelo;
        }

    }

?>