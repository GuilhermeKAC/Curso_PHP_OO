<?php

    abstract class Pessoa {
        
        // Atributos

        protected $nome, $idade, $sexo;

        // Métodos

        public function fazerAniversario() {
            $this->idade ++;
        }

        // Métodos Especiais

        public function getNome() {
            return $this->nome;
        }  
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }
    
    }

?>