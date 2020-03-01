<?php
    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        // Método Cnstrutor

        public function __construct($nome, $idade, $sexo, $login) {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        // Métodos

        public function assistirMaisUm() {
            $this->totAssistido ++;
        }
        
        // Métodos Especiais

        public function getLogin() {
            return $this->login;
        }
        public function setLogin($login) {
            $this->login = $login;
        }
        public function getTotAssistido() {
            return $this->totAssistido;
        }
        public function setTotAssistido($totAssistido) {
            $this->totAssistido = $totAssistido;
        }

    }
?>