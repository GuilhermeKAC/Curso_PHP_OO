<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 02 - POO</title>
        <!--Aula ensina criar uma Classe com Metodos-->
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            require_once 'Aula.php';

            $c1 = new Caneta;

            $c1->modelo = "Pentel";
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->carga = 50;
            //$c1->tampada = false;
            //$c1->tampar();
            $c1->destampar();
            $c1->rabiscar();

            print_r($c1);

            echo "</br>";
            echo "</br>-------------------------------";

            $c2 = new Caneta;

            $c2->modelo = "Bic";
            $c2->cor = "Vermelha";
            $c2->ponta = 0.8;
            $c2->carga = 100;
            $c2->tampar();
            $c2->rabiscar();

            print_r($c2);

            echo "</br>";
            echo "</br>-------------------------------";

            $ads = new Aula;

            $ads->inicioAula = 19;
            $ads->fimAula = 22;
            $ads->professor = "Ana Paula";
            $ads->aula = "PHP Orientado a Objetos";
            //$ads->salaLivre();
            $ads->salaOcupada();
            $ads->comecarAula();

            print_r($ads);
        ?>
    </body>
</html>