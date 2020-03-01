<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso - PHP OO</title>
    </head>
    <body>

        <h1>Projeto Controle Remoto</h1>
        
        <pre>
            <?php

                require_once 'ControleRemoto.php';
                
                $lg = new ControleRemoto();

                $lg->desligar();
                $lg->maisVolume();
                $lg->ligar();
                $lg->menosVolume();
                $lg->play();
                $lg->abrirMenu();

            ?>
        </pre>
        
    </body>
</html>