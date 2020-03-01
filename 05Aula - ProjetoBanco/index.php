<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 05 - POO</title>
        <!--Criar um exemplo pratico Conta Banco-->
    </head>
    <body>
        <pre>
            <?php
                require_once 'ContaBanco.php';

                $pessoa01 = new ContaBanco(); // Guilherme
                $pessoa02 = new ContaBanco(); // Ana

                $pessoa01->abrirConta("CC");
                $pessoa01->setDono("Guilherme");
                $pessoa01->setNumConta(1111);
                $pessoa01->depositar(300);
                $pessoa01->pagarMensal();
                $pessoa01->sacar(338);
                $pessoa01->fecharConta();
                
                echo "<p>-----------------------------------------------</p>";

                $pessoa02->abrirConta("CP");
                $pessoa02->setDono("Ana");
                $pessoa02->setNumConta(2222);
                $pessoa02->depositar(500);
                $pessoa02->sacar(100);
                $pessoa02->pagarMensal();
                $pessoa02->sacar(1000);
                $pessoa02->fecharConta();

                print_r($pessoa01);
                print_r($pessoa02);
                
            ?>
        </pre>
    </body>
</html>