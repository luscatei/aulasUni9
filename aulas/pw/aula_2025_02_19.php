<?php
/* [Aula do dia 19-02-2025]
Comando Condicional 
(if = se)
(else if = se não se)
(else = se não)


$nota = 11;

if($nota >= 7 && $nota <= 10) {
	print "Aprovado.\n\n";
} else if ($nota > 10) {
    print "nota invalida...\n\n";
} 
else if($nota >= 5 && $nota < 7) {
	print "RECUPERAÇÃO.\n\n";
} else {
    echo("REPROVADO!!\n\n");
}
print "PROGRAMA FINALIZADO!!";

[minha tentativa]
$salario = 4.001;

if($salario >= 10.000){
    $salario += $salario*0.15;
    print("Valor reajustado em 15% " .$salario);
}
else if ($salario >= 6.000 || $salario <= 10.000){
    $salario += $salario*0.124;
    print("Valor reajustado em 12.4% " .$salario);
}
else if($salario >= 4.000 || $salario <= 6.000){
    $salario += $salario*0.9;
    print("Valor reajustado em 9% " .$salario);
}
else if($salario)


***************************************************
[Trabalhando com input e calculo de porcentagem]

echo "Digite o valor do salario a ser reajustado: ";

$salario = fgets(STDIN);

if($salario >= 10000){
    $salarioReajustado = $salario * 1.15;
    echo "Salario: " . $salario;
    echo "\nSalario reajustado: " . $salarioReajustado;
}
elseif ($salario >= 6000 && $salario < 10000) {
    $salarioReajustado = $salario * 1.124;
    echo "Salario: " . $salario;
    echo "\nSalario reajustado: " . $salarioReajustado;
}
elseif ($salario >= 4000 && $salario < 6000 ) {
    $salarioReajustado = $salario * 1.09;
    echo "Salario: " . $salario;
    echo "\nSalario reajustado: " . $salarioReajustado;
}
elseif ($salario >= 2000 && $salario < 4000 ) {
    $salarioReajustado = $salario * 1.073;
    echo "Salario: " . $salario;
    echo "\nSalario reajustado: " . $salarioReajustado;
}
else {
    print "Salario: " . $salario . PHP_EOL;
    print "POBRE NÃO TEM REAJUSTE HAHAHAHA!!!!!!!";
}
*/
echo("
--------- Menu principal --------- \n
Digite [1] para Cadastrar funcionario.\t
Digite [2] para Alterar dados do funcionario. \t
Digite [3] para Remover funcionario.\n
Escolha a Opção desejada: ");

$opcao = fgets(STDIN);

fputs("\n\n");

switch ($opcao) {
    case 1:
        echo("Cadastro de funcionario... ");
        break;
    case 2:
        echo("Alterando dados do funcionario... ");
        break;
    case 3:
        echo("Removendo funcionario... ");
        break;
    default:
        echo("Opção invalida...");
        break;
}



?>