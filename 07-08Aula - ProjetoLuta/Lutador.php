<?php

    class Lutador {

        // Atributos

        private $nome, $nacionalidade, $idade, $altura, $peso;
        private $categoria, $vitorias, $derrotas, $empates;

        // Métodos

        function apresentar() {
            echo "<p>------Lutador------</p>";
            echo "</br>Lutador: ". $this->getNome();
            echo "</br>Origem: ". $this->getNacionalidade();
            echo "</br>Idade: ". $this->getIdade() ." anos";
            echo "</br>Altura: ". $this->getAltura() . " m";
            echo "</br>Pesando: ". $this->getPeso(). " kg";
            echo "</br>Ganhou: ". $this->getVitorias(). " lutas";
            echo "</br>Perdeu: ". $this->getDerrotas(). " lutas";
            echo "</br>Empatou: ". $this->getEmpates(). " lutas";
        }
        function status() {
            echo "<p>------Status------</p>";
            echo $this->getNome();
            echo " é um peso ". $this->getCategoria();
            echo "</br>Possui ". $this->getVitorias(). " vitórias, ";
            echo $this->getDerrotas(). " derrotas e ";
            echo $this->getEmpates(). " empate";
        }
        function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Método Especial Construtor

        function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }

        // Métodos Especiais Getter e Setter

        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getNacionalidade() {
            return $this->nacionalidade;
        }
        public function setNacionalidade($nacionalidade) {
            $this->nacionalidade = $nacionalidade;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($idade) {
            $this->idade = $idade;
        }
        public function getAltura() {
            return $this->altura;
        }
        public function setAltura($altura) {
            $this->altura = $altura;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function setPeso($peso) {
            $this->peso = $peso;
            $this->setCategoria();
        }
        public function getCategoria() {
            return $this->categoria;
        }
        public function setCategoria() {
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Médio";
            } elseif ($this->peso <= 120) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        } 
        public function getVitorias() {
            return $this->vitorias;
        }
        public function setVitorias($vitorias) {
            $this->vitorias = $vitorias;
        }
        public function getDerrotas() {
            return $this->derrotas;
        }
        public function setDerrotas($derrotas) {
            $this->derrotas = $derrotas;
        }
        public function getEmpates() {
            return $this->empates;
        }
        public function setEmpates($empates) {
            $this->empates = $empates;
        }

    }