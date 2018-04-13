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
    
}


?>