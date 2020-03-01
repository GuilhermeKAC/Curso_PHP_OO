<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 03 - POO</title>
        <!--Aula ensina a configurar Visibilidade-->
    </head>
    <body>
        <pre>
            <?php
                require_once 'Caneta.php';
    
                $c1 = new Caneta;

                $c1->modelo = "Bic Cristal";
                $c1->cor = "Azul";
                $c1->tampar();
                $c1->destampar();

                print_r($c1);

                $c1->rabiscar();
    
            ?>
        </pre>
    </body>
</html>