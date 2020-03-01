<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa {

        // Atributos

        private $matricula, $curso;

        // Método

        public function pagarMensalidade() {
            echo "<p>Pagando mensalidade do aluno <strong>$this->nome</strong></p>";
        }

        // Métodos Especiais

        public function getMatricula() {
            return $this->matricula;
        }
        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($curso) {
            $this->curso = $curso;
        }

    }

?>