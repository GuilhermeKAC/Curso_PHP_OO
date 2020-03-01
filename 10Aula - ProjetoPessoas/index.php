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

            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            $pessoa1 = new Pessoa();
            $pessoa2 = new Aluno();
            $pessoa3 = new Professor();
            $pessoa4 = new Funcionario();

            $pessoa1->setNome("Guilherme");
            $pessoa1->setIdade(28);
            $pessoa1->setSexo("M");

            $pessoa2->setNome("Ana");
            $pessoa2->setIdade(24);
            $pessoa2->setSexo("F");
            $pessoa2->setCurso("Farmácia");
            $pessoa2->cancelarMatricula();

            $pessoa3->setNome("Thales");
            $pessoa3->setIdade(27);
            $pessoa3->setSexo("M");
            $pessoa3->setSalario(2500.75);
            $pessoa3->receberAumento(550.20);

            $pessoa4->setNome("Down");
            $pessoa4->setIdade(29);
            $pessoa4->setSexo("M");
            $pessoa4->setSetor("Estoque");
            $pessoa4->mudarTrabalho();

            print_r($pessoa1);
            print_r($pessoa2);
            print_r($pessoa3);
            print_r($pessoa4);

            ?>
        </pre>
        
    </body>
</html>