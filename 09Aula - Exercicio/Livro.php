<?php

    require_once "Pessoa.php";
    require_once 'Publicacao.php';

    class Livro implements Publicacao{
        
        // Atributos

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // Métodos
        
        public function detalhes() {
            echo "<hr>";
            echo "</br>---------------Detalhes------------------";
            echo "</br> Livro ". $this->titulo ." escrito por ". $this->autor;
            echo "</br> Páginas: ". $this->totPaginas;
            echo "</br> Página atual: " .$this->pagAtual;
            echo "</br> Sendo lido por ". $this->leitor->getNome();
            echo "<hr>";
        }

        // Método Construtor

        function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->aberto = false;
            $this->pagAtual = 0;
            $this->leitor = $leitor;
        }

        // Métodos Especiais

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }   
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($autor) {
            $this->autor = $autor;
        }
        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }

        // Métodos Implementados

        public function abrir() {
            $this->aberto = true;
        }
        public function fechar() {
            $this->aberto = false;
        }
        public function folhear($p) {
            if ($p > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }
        public function avancarPag() {
            if ($this->pagAtual > $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual ++;
            }
        }
        public function voltarPag() {
            if ($this->pagAtual < $this->totPaginas) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual --;
            }
        }

    }

?>