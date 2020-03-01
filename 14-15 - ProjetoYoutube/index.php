<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso - PHP OO</title>
    </head>
    <body>

        <h1>Projeto Youtube</h1>
        
        <pre>
            <?php

                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';

                $v[0] = new Video("Aula 1 de POO");
                $v[1] = new Video("Aula 12 de PHP");
                $v[2] = new Video("Aula 15 de HTML5");

                $g[0] = new Gafanhoto("Guilherme", 28, "M", "GK");
                $g[1] = new Gafanhoto("Ana", 24, "F", "A");

                $vis[0] = new Visualizacao($g[0], $v[1]); // Guilherme assiste PHP
                $vis[1] = new Visualizacao($g[1], $v[2]); // Ana assiste HTML5
                $vis[0] = new Visualizacao($g[0], $v[0]); // Guilherme assiste POO

                $vis[0]->avaliar();
                $vis[1]->avaliarPorc(85);

                print_r($g);
                print_r($v);
                print_r($vis);

            ?>
        </pre>
        
    </body>
</html>