<?php

include 'Carro.php';

$novoCarro = new Carro("VW","Fox","Azul",15560,50,12,28500);
$novoCarro->mostrarDados();

echo "\n";

$novoCarro2 = new Carro("Chevrolet","Onix","Preto",22350,47,14,30000);
$novoCarro2->mostrarDados();

echo "\n";

$novoCarro3 = new Carro("Fiat","Palio","Prata",0,45,10,33650);
$novoCarro3->mostrarDados();

echo "\n";

$novoCarro4 = new Carro("Renout", "Sandeiro", "Azul-Piscina", 175000, 40, 9, 25000);
$novoCarro4->mostrarDados();

echo "\n";

echo "=====================================================" . PHP_EOL;

echo "\n";
echo "Total de Carros: " . Carro::getTotalCarros() . PHP_EOL;
echo "Valor de todos os carros: " . Carro::getTotalValor() . PHP_EOL;