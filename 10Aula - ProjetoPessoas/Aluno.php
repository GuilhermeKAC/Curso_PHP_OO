<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa {

        // Atributos

        private $matricula, $curso;

        // Métodos

        public function cancelarMatricula() {
            echo "<p>Matricula será cancelada</p>";
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