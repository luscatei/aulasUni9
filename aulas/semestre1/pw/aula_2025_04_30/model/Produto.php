<?php

namespace model;

class Produto 
{
    private $codigo;
    private $produto;
    private $precoUnitario;

    public function __construct($codigo, $produto, $precoUnitario) 
    {
        $this->codigo = $codigo;
        $this->produto = $produto;
        $this->precoUnitario = $precoUnitario;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function getPrecoUnitario()
    {
        return $this->precoUnitario;
    }

    public function buscarTodosProdutos()
    {   // conectar com o banco de dados
        $pdo = new \PDO('mysql:host=localhost;dbname=loja', 'root', 'admin');
        echo "Conectado com sucesso!" . PHP_EOL;

        $statement = $pdo->query('SELECT * FROM produtos');

        return $statement->fetchAll();

    }
}