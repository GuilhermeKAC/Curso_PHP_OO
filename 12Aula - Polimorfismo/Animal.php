<?php

    abstract class Animal {

        // Atributos

        protected $peso, $idade, $membros;

        // Métodos abstratos

        abstract function locomover();
        abstract function alimentar();
        abstract function emitirSom();

        // Métodos especiais

        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function getMembros() {
            return $this->membros;
        }
        public function setMembros($membros) {
            $this->membros = $membros;
        }
    
    }

?>