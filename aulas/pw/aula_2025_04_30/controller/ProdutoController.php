<?php

require_once "model/Produto.php";

use \model\Produto;

class ProdutoController
{
    public function listarProdutos()
    {
        $produtos = [
            new Produto(1, "Produto A", 10.00),
            new Produto(2, "Produto B", 10.50),
            new Produto(3, "Produto C", 11.00),
            new Produto(4, "Produto D", 11.50),
            new Produto(5, "Produto E", 12.00),
            new Produto(null, null, null),
        ];
        

        include "view/listadeprodutos.php";
    }
}