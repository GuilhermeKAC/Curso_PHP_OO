<?php

    require_once 'Aluno.php';

    class Bolsista extends Aluno {

        // Atributos

        private $bolsa;

        // Métodos

        public function RenovarBolsa() {
            echo "<p>Bolsa renovada</p>";
        }

        // Sobrepor Método pagarMensalidade

        public function pagarMensalidade() {
            echo "<p><strong>$this->nome</strong> é bolsista! Então tem desconto</p>";
        }

        // Métodos Especiais

        public function getBolsa() {
            return $this->bolsa;
        }
        public function setBolsa($bolsa) {
            $this->bolsa = $bolsa;
        }

    }

?>