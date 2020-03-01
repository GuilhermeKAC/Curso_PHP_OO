<?php

    require_once 'Animal.php';

    class Reptil extends Animal {

        // Atributos

        private $corEscama;

        // Métodos Abstratos

        public function locomover() {
            echo "<p>Rastejando</p>";
        }
        public function alimentar () {
            echo "<p>Comendo Vegetais</p>";
        }
        public function emitirSom() {
            echo "<p>Som de Réptil</p>";
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