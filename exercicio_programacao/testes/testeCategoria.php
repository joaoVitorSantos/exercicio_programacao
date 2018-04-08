<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/03/18
 * Time: 15:47
 */

require_once "../app/models/Categoria.php";
require_once "../app/models/CategoriaCrud.php";

//teste

//Criando sem construct
$cl = new Categoria();
$cl->setId(1);
$cl->setNome("Teste");
$cl->setDescricao("Objeto bla bla");
var_dump($cl);

//Criando com construct

$c2 = new Categoria(2, "Categoria 2", "Teste");
var_dump($c2);

//Testando CategoriaCrud

$crud = new  CategoriaCrud();
$categoria = $crud->getCategoria(1);

var_dump($categoria);