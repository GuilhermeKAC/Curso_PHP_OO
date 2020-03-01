<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso - PHP OO</title>
    </head>
    <body>

        <h1>Exercicio Prático POO em PHP</h1>
        
        <pre>
            <?php

            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $pessoa = array();
            $livro = array();

            $pessoa[0] = new Pessoa("Guilherme", 28, "M");
            $pessoa[1] = new Pessoa("Ana", 24, "F");
            
            $livro[0] = new Livro("PHP", "Desconhecido", 300, $pessoa[0]);
            $livro[1] = new Livro("Farmacologia", "Desconhecido", 800, $pessoa[1]);
            
            $livro[0]->abrir();
            $livro[0]->voltarPag();
            $livro[0]->detalhes();

            $livro[1]->folhear(400);
            $livro[1]->detalhes();

            ?>
        </pre>
        
    </body>
</html>