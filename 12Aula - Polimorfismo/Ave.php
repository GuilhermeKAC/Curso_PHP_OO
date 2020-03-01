<?php

    require_once 'Animal.php';

    class Ave extends Animal {

        // Atributos

        private $corPena;

        // Métodos Abstratos

        public function locomover() {
            echo "<p>Voando</p>";
        }
        public function alimentar() {
            echo "<p>Comendo Frutas</p>";
        }
        public function emitirSom() {
            echo "<p>Som de Ave</p>";
        }

        // Métodos

        public function fazerNinho() {
            echo "<p>Construindo um ninho</p>";
        }

        // Métodos especiais

        public function getCorPena() {
            return $this->corPena;
        }
        public function setCorPena($corPena) {
            $this->corPena = $corPena;
        }



    }

?>