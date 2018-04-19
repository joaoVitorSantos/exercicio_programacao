<?php

require_once __DIR__. '/../models/CategoriaCrud.php';

    $rota = $_GET['rota'];
    $action = $_GET['action'];

if ($rota == "inserir"){
    header('Location: ../view/inserir.php');
}elseif ($action =='showCategoria') {
    $id = $_GET['id'];
    $crud = new CategoriaCrud();
    $categoria = $crud->getCategoria($id);
    include '../templates/cabecalho.php';
    include '../view/showCategoria.php';
    include '../templates/rodape.php';
}