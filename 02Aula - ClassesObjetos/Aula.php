<?php

    class Aula {
        var $inicioAula;
        var $fimAula;
        var $professor;
        var $aula;
        var $sala;

        function comecarAula() {
            if ($this->sala == true) {
                echo "<p>A aula pode começar</p>";
            } else {
                echo "<p>Hoje não teremos aula!</p>";
            }
        }

        function salaLivre() {
            $this->sala = true;
        }

        function salaOcupada() {
            $this->sala = false;
        }

    }

?>