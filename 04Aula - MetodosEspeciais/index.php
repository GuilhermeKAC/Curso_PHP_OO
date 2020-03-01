<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 04 - POO</title>
        <!--Aula ensina a os metedos Getter, Setter e Constructor-->
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';

                $c1 = new Caneta("Bic", "Azul", 0.5);
                $c2 = new Caneta("Pentel", "Preta", 0.8);
                
                print_r($c1);
                print_r($c2);
            ?>
        </pre>
    </body>
</html>