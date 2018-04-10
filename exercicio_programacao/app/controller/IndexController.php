<?php

    require_once __DIR__. '/../models/CategoriaCrud.php';

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
        case 'show':
            $id = $_GET['id'];
            $crud = new CategoriaCrud();
            $categoria = $crud->getCategoria($id);
            include '../templates/cabecalho.php';
            include '../view/show.php';
            include '../templates/rodape.php';
    }
?>