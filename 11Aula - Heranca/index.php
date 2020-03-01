<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso - PHP OO</title>
    </head>
    <body>

        <h1>Herança em PHP</h1>
        
        <pre>
            <?php

                require_once 'Visitante.php';
                require_once 'Aluno.php';
                require_once 'Bolsista.php';

                $v1 = new Visitante();
                $v1->setNome("Juvenal");
                $v1->setIdade(33);
                $v1->setSexo("M");

                print_r($v1);

                $a1 = new Aluno();
                $a1->setNome("Guilherme");
                $a1->setMatricula(1111);
                $a1->setIdade(28);
                $a1->setSexo("M");
                $a1->setCurso("Informatica");
                $a1->pagarMensalidade();

                print_r($a1);

                $b1 = new Bolsista();
                $b1->setMatricula(1112);
                $b1->setNome("Ana");
                $b1->setBolsa(100);
                $b1->setCurso("Pharmacia");
                $b1->setIdade(24);
                $b1->setSexo("F");
                $b1->pagarMensalidade();

                print_r($b1);

            ?>
        </pre>
        
    </body>
</html>