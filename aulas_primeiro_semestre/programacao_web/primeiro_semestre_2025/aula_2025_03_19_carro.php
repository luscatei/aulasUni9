<?php

class Carro{
    
    //Propriedades ou Atributos (Variável dentro da classe) 
    private $marca;
    private $modelo;
    private $cor;
    private $km;
    private $capacidadeTanque;
    private $kmPorLitro;
    private $preco;
    private $valorComDesconto;

    
    //Métodos (Função)

    public function __construct($marca, $modelo, $cor, $km, $capacidadeTanque, $kmPorLitro, $preco){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->km = $km;
        $this->capacidadeTanque = $capacidadeTanque;
        $this->kmPorLitro = $kmPorLitro;
        $this->preco = $preco;
    }

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getKm(){
        return $this->km;
    }
    public function setKm($km){
        $this->km = $km;
    }
    public function getCapacidadeTanque(){
        return $this->capacidadeTanque;
    }
    public function setCapacidadeTanque($capacidadeTanque){
        $this->capacidadeTanque = $capacidadeTanque;
    }
    public function getKmPorLitro(){
        return $this->kmPorLitro;
    }
    public function setKmPorLitro($kmPorLitro){
        $this->kmPorLitro = $kmPorLitro;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getValorComDesconto(){
        return $this->valorComDesconto;
    }
    public function setValorComDesconto($valorComDesconto){
        $this->valorComDesconto = $valorComDesconto;
    }
    //Método para calcular a rodagem do carro
    public function calcularKm(){
        if($this->kmPorLitro == 0){
            return 0; // Evita divisão por zero
        }
        $rodagem = $this->capacidadeTanque * $this->kmPorLitro;
        return $rodagem;
    }
    //Método para calcular o desconto do carro
    //O desconto máximo é de 4% e o mínimo é 0%
    //O desconto é aplicado sobre o preço do carro
    //O percentual de desconto é passado como parâmetro
    //Se o percentual for menor que 0, considera 0
    //Se o percentual for maior que 4, considera 4
    //O valor do desconto é subtraído do preço do carro
    //O valor com desconto é armazenado na propriedade valorComDesconto
    //O método retorna o valor do desconto calculado
    
    public function calcularDesconto($percentualDescontoVendedor){
        
        if($percentualDescontoVendedor<0){
            $percentualDescontoVendedor = 0;
        }else if($percentualDescontoVendedor>4){
            $percentualDescontoVendedor = 4;
        }
        
        $desconto = $this->preco * ($percentualDescontoVendedor/100);
        $this->valorComDesconto = $this->preco - $desconto;
        
        return $desconto;
        
    }
 
    
    public function mostrarDados(){
        echo "Marca.............: " . $this->getMarca() .PHP_EOL;
        echo "Modelo............: " . $this->getModelo() .PHP_EOL;
        echo "Cor...............: " . $this->getCor() .PHP_EOL;
        echo "Km................: " . $this->getKm() .PHP_EOL;
        echo "Capacidade Tanque.: " . $this->getCapacidadeTanque() .PHP_EOL;
        echo "Km Por Litro......: " . $this->getKmPorLitro() . PHP_EOL;
        echo "Rodagem...........: " . $this->calcularKm() . PHP_EOL;
        echo "Preço.............: " . $this->getPreco() . PHP_EOL;
        echo "Desconto..........: " . $this->calcularDesconto(1) . PHP_EOL;
        echo "Valor Com Desconto: " . $this->getValorComDesconto() . PHP_EOL;
        echo "\n";
    }
}
