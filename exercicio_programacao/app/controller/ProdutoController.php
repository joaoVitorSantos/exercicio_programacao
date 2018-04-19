<?php

require_once __DIR__. "/../models/ProdutoCrud.php";

if($_GET['action'] == "showProduto"){

  $id = $_GET['id'];

  $crud = new ProdutoCrud();
  $produto = $crud->getProduto($id);

  include_once "../templates/cabecalho.php";
  include_once "../view/ShowProduto.php";
  include_once "../templates/rodape.php";

}