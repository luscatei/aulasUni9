<?php

include 'aula_2025_03_26_atv_prod.php';

do{
  fgets(STDIN);
  system('clear');
  echo "********** Menu **********" . PHP_EOL;
  echo "[1] - Exibir produtos cadastrados..." . PHP_EOL;
  echo "[2] - Alterar o preço do produto...." . PHP_EOL;
  echo "[3] - Alterar os dados do produto..." . PHP_EOL;
  echo "[4] - Exibir dados do produto......." . PHP_EOL;
  echo "[5] - Criar produto................." .  PHP_EOL;
  echo "[6] - Instruções de uso do sistema.." . PHP_EOL;
  echo "[7] - Sair.........................." . PHP_EOL;
  echo "**************************" . PHP_EOL;
  echo "Digite a opção desejada: " . PHP_EOL;

  $opcao = fgets(STDIN);

  switch($opcao){
    case 1:
      echo "Produtos cadastrados: " . PHP_EOL;
      echo "Produto 1: " . PHP_EOL;
      $produto1 = new Produto(1, "Produto 1", 10);
      $produto1->mostrarProduto();
      echo "Produto 2: " . PHP_EOL;
      $produto2 = new Produto(2, "Produto 2", 20);
      $produto2->mostrarProduto();
      echo "Produto 3: " . PHP_EOL;
      $produto3 = new Produto(3, "Produto 3", 30);
      $produto3->mostrarProduto();
      break;
    case 2:
      echo "Digite o código do produto que deseja alterar o preço: " . PHP_EOL;
      $codigo = fgets(STDIN);
      echo "Digite o novo preço do produto: " . PHP_EOL;
      $preco = fgets(STDIN);
      if($codigo == 1){
        $produto1->setPreco($preco);
      }elseif($codigo == 2){
        $produto2->setPreco($preco);
      }elseif($codigo == 3){
        $produto3->setPreco($preco);
      }else{
        echo "Produto não encontrado!" . PHP_EOL;
      }
      break;
    case 3:
      echo "Digite o código do produto que deseja alterar os dados: " . PHP_EOL;
      $codigo = fgets(STDIN);
      echo "Digite o novo nome do produto: " . PHP_EOL;
      $nome = fgets(STDIN);
      echo "Digite o novo preço do produto: " . PHP_EOL;
      $preco = fgets(STDIN);
      if($codigo == 1){
        $produto1->setNome($nome);
        $produto1->setPreco($preco);
      }elseif($codigo == 2){
        $produto2->setNome($nome);
        $produto2->setPreco($preco);
      }elseif($codigo == 3){
        $produto3->setNome($nome);
        $produto3->setPreco($preco);
      }else{
        echo "Produto não encontrado!" . PHP_EOL;
      }
      break;
    case 4:
      echo "Digite o código do produto que deseja exibir os dados: " . PHP_EOL;
      $codigo = fgets(STDIN);
      if($codigo == 1){
        $produto1->mostrarProduto();
      }elseif($codigo == 2){
        $produto2->mostrarProduto();
      }elseif($codigo == 3){
        $produto3->mostrarProduto();
      }else{
        echo "Produto não encontrado!" . PHP_EOL;
      }
      break;
    case 5:
      echo "Digite o código do produto: " . PHP_EOL;
      $codigo = fgets(STDIN);
      echo "Digite o nome do produto: " . PHP_EOL;
      $nome = fgets(STDIN);
      echo "Digite o preço do produto: " . PHP_EOL;
      $preco = fgets(STDIN);
      if($codigo == 1){
        $produto1 = new Produto($codigo, $nome, $preco);
      }elseif($codigo == 2){
        $produto2 = new Produto($codigo, $nome, $preco);
      }elseif($codigo == 3){
        $produto3 = new Produto($codigo, $nome, $preco);
      }else{
        echo "Produto não encontrado!" . PHP_EOL;
      }
      break;
    case 6:
      echo "Instruções de uso do sistema: " . PHP_EOL;
      echo "1 - Exibir produtos cadastrados: Exibe os produtos cadastrados no sistema." . PHP_EOL;
      echo "2 - Alterar o preço do produto: Altera o preço de um produto cadastrado." . PHP_EOL;
      echo "3 - Alterar os dados do produto: Altera o nome e o preço de um produto cadastrado." . PHP_EOL;
      echo "4 - Exibir dados do produto: Exibe os dados de um produto cadastrado." . PHP_EOL;
      echo "5 - Criar produto: Cria um novo produto." . PHP_EOL;
      echo "6 - Instruções de uso do sistema: Exibe as instruções de uso do sistema." . PHP_EOL;
      echo "7 - Sair: Encerra o sistema." . PHP_EOL;
      break;
    case 7:
      echo "Saindo..." . PHP_EOL;
      break;
    default:
      echo "Opção inválida!" . PHP_EOL;
  }
}
while($opcao != 7);


?>
