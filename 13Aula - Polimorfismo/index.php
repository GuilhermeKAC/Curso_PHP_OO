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
                require_once 'Lobo.php';
                require_once 'Cachorro.php';

                $c = new Cachorro();

                $c->reagirFrase("Ola");
                $c->reagirFrase("Vai Apanhar");
                $c->reagirHora(11, 45);
                $c->reagirHora(21, 00);
                $c->reagirDono(True);
                $c->reagirDono(False);
                $c->reagirIdadePeso(2, 12.5);
                $c->reagirIdadePeso(17, 4.5);

            ?>
        </pre>
        
    </body>
</html>