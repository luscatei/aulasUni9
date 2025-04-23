<?php

include "aula_2025_03_19_carro.php";

$novoCarro = new Carro("VW", "Fox", "Azul", 15560, 50, 12, 28500);
$novoCarro->mostrarDados();

echo "\n";

$novoCarro2 = new Carro("chw", "Onix", "Preto", 22350, 47, 14, 30000);
$novoCarro2->mostrarDados();

echo "\n";

$novoCarro3 = new Carro("fia", "Palio", "Prata", 0, 45, 10, 33650);
$novoCarro3->mostrarDados();

echo "\n";