<?php

    class Caneta {
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;

       public function Caneta ($m, $c, $p) { //Método Construtor
            $this->setModelo($m);
            $this->setCor($c);
            $this->setPonta($p);
            $this->tampar();
        }

        public function tampar() {
            $this->tampada = true;
        }

        public function getModelo() {
            return $this->modelo;
        }
        public function setModelo($m) {
            $this->modelo = $m;
        }
        public function getPonta() {
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
        public function getCor() {
            return $this->cor;
        }
        public function setCor($c) {
            $this->cor = $c;
        }
        public function getTampada() {
            return $this->tampada;
        }
        public function setTampada($t) {
            $this->tampada = $t;
        }
    

    }

?>