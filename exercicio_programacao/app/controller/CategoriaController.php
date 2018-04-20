<?php

require_once __DIR__. '/../models/CategoriaCrud.php';

    $action = $_GET['action'];

if ($action == "inserir"){
 //   header('Location: ../view/inserir.php');
    if (!isset($_POST['gravar'])) {
        include_once "../templates/cabecalho.php";
        include_once "../view/inserir.php";
        include_once "../templates/rodape.php";
    }else{
        $c = new CategoriaCrud();
        $cat = new Categoria($_POST['nome'], $_POST['descricao']);
        $c->insertCategoria($cat);
        header('Location: ../view/categoria.php');

    }
}elseif ($action =='showCategoria') {
    $id = $_GET['id'];
    $crud = new CategoriaCrud();
    $categoria = $crud->getCategoria($id);
    include '../templates/cabecalho.php';
    include '../view/showCategoria.php';
    include '../templates/rodape.php';
}elseif ($action == 'indexEditar'){
    $id = $_GET['id'];
    $crud = new CategoriaCrud();
    $categoria = $crud->getCategoria($id);
}