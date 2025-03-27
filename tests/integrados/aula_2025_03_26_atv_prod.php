<?php

class Produto{

  //Propriedade dos produto
  private $codigo;
  private $nome;
  private $preco;


  //metodos

  public function __construct($codigo, $nome, $preco){
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->preco = $preco;
  }

  public function getCodigo(){
    return $this->codigo;
  }
  public function setCodigo($codigo){
    $this->codigo = $codigo;
  }


  public function getNome(){
    return $this->nome;
  }
  public function setNome($nome){
    $this->nome = $nome;
  }


  public function getPreco(){
    return $this->preco;
  }
  public function setPreco($preco){
    $this->preco = $preco;
  }

  public function criarProduto(){
    
  }

  public function mostrarProduto(){
    echo "Código..: ".$this->getCodigo(). PHP_EOL;
    echo "Nome....: ".$this->getNome(). PHP_EOL;
    echo "Preço...: ".$this->getPreco(). PHP_EOL;
  }
}