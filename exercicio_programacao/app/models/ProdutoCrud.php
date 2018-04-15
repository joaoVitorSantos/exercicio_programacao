<?php

require_once "DBConnection.php";
require_once "Produto.php";
class ProdutoCrud
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = DBConnection::getConexao();
    }

    public function getProdutos(){

        $sql = "SELECT * FROM produto";
        
        $resultado = $this->conexao->query($sql);
        
        $produtos = $resultado->fetchAll(PDO:: FETCH_ASSOC);


        $listaProdutos = array();

        foreach ($produtos as $produto){

            $id = $produto['id_produto'];
            $nome = $produto['nome_produto'];
            $descricao = $produto['descricao_produto'];
            $foto = $produto['foto_produto'];
            $preco = $produto['preco_produto'];
            $id_categoria = $produto['id_categoria'];

            $listaProdutos[] = new Produto($id, $nome, $descricao, $foto, $preco, $id_categoria);



        }

        return $listaProdutos;

    }

    public function getProduto($id){
        $sql = "SELECT * FROM produto WHERE id_produto = " . "{$id}";

        $consulta = $this->conexao->query($sql);

        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

        $produto = new Produto($resultado['id_produto'], $resultado['nome_produto'], $resultado['descricao_produto'], $resultado['preco_produto'], $resultado['id_categoria'], $resultado['foto_produto']) ;

        return $produto;
    }
    
}

//Teste
//$crud = new ProdutoCrud();
//$esporte = $crud->getProduto(5);
//print_r($esporte);


?>