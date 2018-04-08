<?php

    require_once __DIR__. '/../models/CategoriaCrud.php';

    if (isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = 'index';
    }

    switch ($action){
        case 'index':
            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();
            include '../categoria/categoria.php';
            break;
    }
?>