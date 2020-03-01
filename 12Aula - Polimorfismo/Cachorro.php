<?php

    require_once 'Mamifero.php';

    class Cachorro extends Mamifero {

        // Método sobrescrito

        public function emitirSom() {
            echo "<p>AU AU AU AU</p>";
        }
    }

?>