<?php

    require_once 'Controlador.php';

    class ControleRemoto implements Controlador {
        
        //Atributos

        private $volume;
        private $ligado;
        private $tocando;

        //Método Construtor

        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        // Métodos Especiais

        private function getVolume() {
            return $this->volume;
        }
        private function setVolume($volume) {
            $this->volume = $volume;
        }
        private function getLigado() {
            return $this->ligado;
        }
        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }
        private function getTocando() {
            return $this->tocando;
        }
        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }

        // Métodos Abstratos

        public function ligar() {
            $this->setLigado(true);
        }
        public function desligar() {
            $this->setLigado(false);
        }
        public function abrirMenu() {
            echo "</br>-----MENU-----";
            echo "</br>Está ligado?: ". ($this->getLigado()?"Sim":"Não");
            echo "</br>Está tocando?: ". ($this->getTocando()?"Sim":"Não");
            echo "</br>Volume: ". $this->getVolume();

            for($i=0; $i <= $this->getVolume(); $i+=10) {
                echo " |";
            }
            echo "</br>";
        }
        public function fecharMenu() {
            echo "</br>Fechando Menu...";
        }
        public function maisVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 10);
            } else {
                echo "<p>Erro! Não posso aumentar o volume </p>";
            }
        }
        public function menosVolume() {
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 10);
            } else {
                echo "<p>Erro! Não posso diminuir o volume</p>";
            }
        }
        public function ligarMudo() {
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }
        public function desligarMudo() {
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }
        public function play() {
            if ($this->getLigado() && !($this->getTocando())) {
                $this->setTocando(true);
            }
        }
        public function pause() {
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }


    }

?>