<?php

// criação de array

$nomes = array();
$nomes[0] = "Lucas";
$nomes[1] = "João";
$nomes[2] = "Maria";
$nomes[3] = "Ana";

for ($i = 0; $i < count($nomes); $i++) {
    echo $nomes[$i] . "<br>";
}