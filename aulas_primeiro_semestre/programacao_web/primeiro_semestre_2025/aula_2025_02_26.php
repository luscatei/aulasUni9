/*for($i = 0; $i <= 10; $i++){
    if ($i%2 == 1){
        print("Valor de i $i". PHP_EOL);
    }
}
*/

/*
$i = 0;
while($i <= 10){
    print("Valor de i $i". PHP_EOL);
    $i++;
}*/
/*
do{
    print("Valor de i $i". PHP_EOL);
    $i++;
}while($i <= 10);
*/
/*
do{
    fgets(STDIN);
    system('clear');
    echo "-*-*-*-*-*-*-*-*-*-* MEU NU -*-*-*-*-*-*-*-*-*-*-*-*-*-\n";
    echo "1 - Cadastrar pessoa.\n";
    echo "2 - Mostrar pessoa cadastrada\n";
    echo "3 - Funalizat o sistema\n";
    echo "Escolha a opção desejada: ".PHP_EOL;
    
    $opcao = fgets(STDIN);
    
    switch ($opcao) {
        case 1:
            echo("==== CADASTRANDO PESSOA ++++\n");
            break;
        case 2:
            echo("==== MOSTRANDO PESSOA CADASTRADA ++++\n");
            break;
        case 3:
            echo("==== FINALIZANDO O SISTEMA ++++\n");
            break;
        default:
            echo("OPÇÃO INVALIDA...\n\n");
            break;
    }
}while($opcao != 3);


echo "fim do programa\n\n";
*/