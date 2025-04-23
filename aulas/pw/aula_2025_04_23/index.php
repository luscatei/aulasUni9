<!--    Diferenca entre [require e include], a questao de interromper ou n, o 'include' nao interrompe a execucao da pagina, mostra o erro mas mostra as informacoes. Ja o 'require' para a execucao por ser mais rigoroso. -->

<!--    O momento certo de utilizar cada um desses comandos depende do tipo de acao que sera feita pelo usuario. -->

<?php
    require_once "header.php";
    require_once "fornecedor1/Produto.php";
    require_once "fornecedor2/Produto.php";

    /*
        Essas sao duas formas de chamar os produtos 
            
            use \fornecedor_principal\Produto as ProdutoPrincipal;
            use fornecedor_secundario\Produto;
    */
    use \fornecedor_principal\Produto as ProdutoPrincipal;
    use fornecedor_secundario\Produto;

    echo "<h1>Aula PHP.</h1>"; 
    echo "<h3>23/04/2025.</h3>";

    $produto1 = new \fornecedor_principal\Produto();
    $produto1->mostrarDetalhes();

    echo "<br>";

    $produto2 = new \fornecedor_secundario\Produto();
    $produto2->mostrarDetalhes();


    require_once "footer.php";
?>



<!--    O 'require_once' e o 'include_once' sao utilizados para evitar que um arquivo seja incluido mais de uma vez, evitando assim erros de redeclaracao de classes ou funcoes. -->