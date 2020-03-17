<?php

require_once "Pessoa.php";
require_once "Programador.php";

$programador = new Programador("Guilherme ", "PHP");

echo $programador->getNome();
echo $programador->getLinguagem();

# constantes

echo $programador::ESPECIE;
