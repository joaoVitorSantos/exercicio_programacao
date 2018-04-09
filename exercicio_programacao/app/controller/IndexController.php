<?php

    require_once __DIR__. '/../models/CategoriaCrud.php';

    if (isset($_GET['action'])){
        $action = $_GET['action'];
    } elseif ($rota == "inserir"){
        header('Location: ../view/inserir.php');
    }   else {
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