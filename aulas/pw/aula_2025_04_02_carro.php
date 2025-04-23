<?php

class Carro{
    
    //Propriedades ou Atributos (Variável dentro da classe - global) 
    private $marca;
    private $modelo;
    private $cor;
    private $km;
    private $capacidadeTanque;
    private $kmPorLitro;
    private $preco;
    private $valorComDesconto;
    // adição da propriedade statica $totalCarros iniciado com 0
    private static $totalCarros = 0;
    private static $totalValor = 0;
    
    public function __construct($marca,$modelo,$cor,$km,$capacidadeTanque,$kmPorLitro,$preco){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->km = $km;
        $this->capacidadeTanque = $capacidadeTanque;
        $this->kmPorLitro = $kmPorLitro;
        $this->preco = $preco;
        // Dentro da classe utilizamos a palavra "self"
        self::$totalCarros++;
        self::$totalValor = self::$totalValor + $this->preco;;
    }
    
    //Métodos (Função)
    public function calcularKm(){
        return $this->capacidadeTanque * $this->kmPorLitro;
    }
    
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
    }
    
    //GETTERS (PEGAR) E SETTERS (INSERIR)
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function getMarca(){
        return $this->marca;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setCor($cor){
        $this->cor = $cor;
    }
    
    public function getCor(){
        return $this->cor;
    }
    
    public function setKm($km){
        $this->km = $km;
    }
    
    public function getKm(){
        return $this->km;
    }
    
    public function setCapacidadeTanque($capacidadeTanque){
        $this->capacidadeTanque = $capacidadeTanque;
    }
    
    public function getCapacidadeTanque(){
        return $this->capacidadeTanque;
    }
    
    public function setKmPorLitro($kmPorLitro){
        $this->kmPorLitro = $kmPorLitro;
    }
    
    public function getKmPorLitro(){
        return $this->kmPorLitro;
    }
    
    public function setPreco($preco){
        $this->preco = $preco;
    }
    
    public function getPreco(){
        return $this->preco;
    }
    
    public function setValorComDesconto($valorComDesconto){
        $this->valorComDesconto = $valorComDesconto;
    }
    
    public function getValorComDesconto(){
        return $this->valorComDesconto;
    }
    
    // adição do getTotalCarros (forma "normal")
    public static function getTotalCarros(){
        return self::$totalCarros;
    }
    
    public static function getTotalValor(){
        return self::$totalValor;
    }
}

