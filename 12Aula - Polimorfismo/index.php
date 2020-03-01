<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso - PHP OO</title>
    </head>
    <body>

        <h1>Polimorfismo em PHP</h1>
        
        <pre>
            <?php

                require_once 'Mamifero.php';
                require_once 'Reptil.php';
                require_once 'Peixe.php';
                require_once 'Ave.php';
                require_once 'Canguru.php';
                require_once 'Cachorro.php';
                require_once 'Cobra.php';
                require_once 'Tartaruga.php';
                require_once 'GoldFish.php';
                require_once 'Arara.php';

                $m = new Mamifero();
                $a = new Ave();
                $r = new Reptil();
                $c = new Canguru();
                $k = new Cachorro();
                $t = new Tartaruga();

                $m->emitirsom();
                $c->emitirsom();
                $k->emitirsom();
                $t->emitirsom();

            ?>
        </pre>
        
    </body>
</html>