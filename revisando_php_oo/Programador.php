<?php

require_once "Pessoa.php";

class Programador extends Pessoa{

    public $linguagem;

    public function __construct($tmpNome, $tmpLinguagem) {
        $this->nome = $tmpNome;
        $this->linguagem = $tmpLinguagem;

        echo "<br>Objeto ".__CLASS__."foi instanciado<br>";
    }

    public function setLinguagem($novaLinguagem) {
        $this->linguagem = $novaLinguagem;
    }
    public function getLinguagem() {
        return $this->linguagem;
    }

}