<?php

include 'aula_2025_03_19_carro.php';
// Aula 2025-03-19 - Programação Web - Materia passada pelo professor Anderson Rocha
// Se for rodar esse codigo no GDB lembre-se de alterar o include para Carro.php
// Instanciando a classe Carro e utilizando os métodos para definir os atributos e exibir os dados


$novoCarro = new Carro("VW", "Fox", "Azul", 15560, 50, 12, 28500);
// $novoCarro->setMarca("VW");
// $novoCarro->setModelo("Fox");
// $novoCarro->setCor("Azul");
// $novoCarro->setKm(15560);
// $novoCarro->setCapacidadeTanque(50);
// $novoCarro->setKmPorLitro(12);
// $novoCarro->setPreco(28500);

echo "Marca.............: " . $novoCarro->getMarca() .PHP_EOL;
echo "Modelo............: " . $novoCarro->getModelo() .PHP_EOL;
echo "Cor...............: " . $novoCarro->getCor() .PHP_EOL;
echo "Km................: " . $novoCarro->getKm() .PHP_EOL;
echo "Capacidade Tanque.: " . $novoCarro->getCapacidadeTanque() .PHP_EOL;
echo "Km Por Litro......: " . $novoCarro->getKmPorLitro() . PHP_EOL;
echo "Rodagem...........: " . $novoCarro->calcularKm() . PHP_EOL;
echo "Preço.............: " . $novoCarro->getPreco() . PHP_EOL;
echo "Desconto..........: " . $novoCarro->calcularDesconto(1) . PHP_EOL;
echo "Valor Com Desconto: " . $novoCarro->getValorComDesconto() . PHP_EOL;

$novoCarro->setPreco(1000000);

echo "\n";
// /*
// $novoCarro2 = new Carro("chw", "Onix", "Preto", 22350, 47, 14, 30000);
// // $novoCarro2->setMarca("Chevrolet");
// // $novoCarro2->setModelo("Onix");
// // $novoCarro2->setCor("Preto");
// // $novoCarro2->setKm(22350);
// // $novoCarro2->setCapacidadeTanque(47);
// // $novoCarro2->setKmPorLitro(14);
// // $novoCarro2->setPreco(30000);

// echo "Marca.............: " . $novoCarro2->getMarca() .PHP_EOL;
// echo "Modelo............: " . $novoCarro2->getModelo() .PHP_EOL;
// echo "Cor...............: " . $novoCarro2->getCor() .PHP_EOL;
// echo "Km................: " . $novoCarro2->getKm() .PHP_EOL;
// echo "Capacidade Tanque.: " . $novoCarro2->getCapacidadeTanque() .PHP_EOL;
// echo "Km Por Litro......: " . $novoCarro2->getKmPorLitro() . PHP_EOL;
// echo "Rodagem...........: " . $novoCarro2->calcularKm() . PHP_EOL;
// echo "Preço.............: " . $novoCarro2->getPreco() . PHP_EOL;
// echo "Desconto..........: " . $novoCarro2->calcularDesconto(3) . PHP_EOL;
// echo "Valor Com Desconto: " . $novoCarro2->getValorComDesconto() . PHP_EOL;

// echo "\n";

// $novoCarro3 = new Carro("fia", "Palio", "Prata", 0, 45, 10, 33650);
// // $novoCarro3->setMarca("Fiat");
// // $novoCarro3->setModelo("Palio");
// // $novoCarro3->setCor("Prata");
// // $novoCarro3->setKm(0);
// // $novoCarro3->setCapacidadeTanque(45);
// // $novoCarro3->setKmPorLitro(10);
// // $novoCarro3->setPreco(33650);

// echo "Marca.............: " . $novoCarro3->getMarca() .PHP_EOL;
// echo "Modelo............: " . $novoCarro3->getModelo() .PHP_EOL;
// echo "Cor...............: " . $novoCarro3->getCor() .PHP_EOL;
// echo "Km................: " . $novoCarro3->getKm() .PHP_EOL;
// echo "Capacidade Tanque.: " . $novoCarro3->getCapacidadeTanque() .PHP_EOL;
// echo "Km Por Litro......: " . $novoCarro3->getKmPorLitro() . PHP_EOL;
// echo "Rodagem...........: " . $novoCarro3->calcularKm() . PHP_EOL;
// echo "Preço.............: " . $novoCarro3->getPreco() . PHP_EOL;
// echo "Desconto..........: " . $novoCarro3->calcularDesconto(3) . PHP_EOL;
// echo "Valor Com Desconto: " . $novoCarro3->getValorComDesconto() . PHP_EOL;

// echo "\n";*/