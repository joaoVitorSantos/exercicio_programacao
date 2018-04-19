<?php

    require_once __DIR__. '/../models/CategoriaCrud.php';
    require_once __DIR__. '/../models/ProdutoCrud.php';

    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }else {
        $action = 'index';
    }
    switch ($action){
        case 'index':
            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();
            include '../templates/cabecalho.php';
            include '../view/categoria.php';
            include '../templates/rodape.php';
            break;
        case 'indexProduto':
            $crud = new ProdutoCrud();
            $produtos = $crud->getProdutos();
            include '../templates/cabecalho.php';
            include '../view/produto.php';
            include '../templates/rodape.php';
            break;
    }
?>