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
  
}
