<?php

    require_once 'Animal.php';

    class Peixe extends Animal {

        // Atributos

        private $corEscama;

        // Métodos Abstratos

        public function locomover() {
            echo "<p>Nadando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo Substancias</p>";
        }
        public function emitirSom() {
            echo "<p>Peixe não faz som</p>";
        }

        // Métodos

        public function soltarBolha() {
            echo "<p>Soltando uma bolha</p>";
        }

        // Métodos especiais

        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($corEscama) {
            $this->corEscama = $corEscama;
        }

    }

?>