<?php

    require_once 'Mamifero.php';

    class Canguru extends Mamifero {

        // Metodo sobrepor

        public function locomover() {
            echo "<p>Saltando</p>";
        }
    }

?>